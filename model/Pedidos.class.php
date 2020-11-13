<?php

Class Pedidos extends Conexao{

    function __construct()
    {
        parent::__construct();
    }

    function PedidoGravar($cliente, $cod, $ref, $fretevalor=null, $fretetipo=null)
    {
       
        $retorno = false;

        $query  = "INSERT INTO ".$this->prefix."pedidos ";   
        $query .= "(ped_data, ped_hora, ped_cliente, ped_cod, ped_ref, ped_fretevalor, ped_fretetipo)"; 
        $query .= " VALUES ";
        $query .= "(:data, :hora, :cliente, :cod, :ref, :frete_valor, :frete_tipo)";
        
        $params = array(
            //salvando da forma padrão do Banco (modelo americano)
            ':data' => Sistema::DataAtualUS(),
            ':hora' => Sistema::HoraAtual(),
            ':cliente'=> (int)$cliente,
            ':cod' => $cod,
            ':ref' => $ref,
            ':frete_valor'=>$fretevalor,
            ':frete_tipo' =>$fretetipo
        );

        $this->ExecuteSQL($query,$params);
        $this->ItensGravar($cod);

       $retorno = true;

       return $retorno;
   
    }

    function ItensGravar ($codpedido)
    {
        $carrinho = new Carrinho();
        foreach($carrinho->GetCarrinhos() as $item)
        {
            $query  = "INSERT INTO ".$this->prefix."pedidositens ";
        $query .= "(item_produto, item_valor, item_qtd, item_pedcod)";
        $query .= "VALUES  (:produto,:valor,:qtd,:cod)";
                
                $params = array(
                ':produto' => $item['proc_id'],
                ':valor'   => $item['proc_valor_us'],
                ':qtd'     => (int)$item['proc_qtd'],
                ':cod'     =>  $codpedido  
                );
            $this->ExecuteSQL($query,$params); 
        }  
          
    }

    function LimparSessao(){
        unset($_SESSION['PRO']);
        unset($_SESSION['pedido']);
    }
}



?>