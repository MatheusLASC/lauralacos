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

    function GetPedidosCliente($cliente= null)
    {
        $query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c";
        $query .= " ON p.ped_cliente = c.cli_id";
        if($cliente != null)
        {
            $cli = (int)$cliente;
            $query .= " WHERE p.ped_cliente = {$cli}";
        }

        $this->ExecuteSQL($query);
        $this->GetLista();
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

    private function GetLista(){
        
        $i = 1;
        while ($lista = $this->ListarDados()):
            
        $this->itens[$i] = array(
                'ped_id'    => $lista['ped_id'],
                'ped_data'  => Sistema::Fdata($lista['ped_data']),
                'ped_data_us'  => $lista['ped_data'],
                'ped_hora'   => $lista['ped_hora'],
                'ped_cliente' => $lista['ped_cliente'],
                'ped_cod'   => $lista['ped_cod'],
                'ped_ref'     => $lista['ped_ref'],
                'ped_pagstatus' => $lista['ped_pagstatus'],
                'ped_pagforma'   => $lista['ped_pagforma'],
                'ped_pagtipo'    => $lista['ped_pagtipo'],
                'ped_pagcod'   => $lista['ped_pagcod'],
                'ped_fretevalor' => $lista['ped_fretevalor'],
                'ped_fretetipo'  => $lista['ped_fretetipo'],
                'cli_nome'  => $lista['cli_nome'],
            );
          
            $i++;
        
        endwhile;
        
        
    }

    function LimparSessoes(){
		unset($_SESSION['PRO']);
		unset($_SESSION['PED']['pedido']);
        unset($_SESSION['PED']['ref']);	
	}
}



?>