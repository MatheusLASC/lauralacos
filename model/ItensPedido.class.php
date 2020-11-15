<?php 
class Itens extends Conexao{

	private $total_valor;

	function __construct(){
		parent::__construct();
	}

	function GetItensPedido($pedido, $cliente=null){
      $query = "SELECT * FROM {$this->prefix}pedidos p, {$this->prefix}pedidositens i, {$this->prefix}produtos d";
      $query .= " WHERE p.ped_cod = i.item_pedcod AND i.item_produto = d.pro_id";
      $query .= " AND p.ped_cod = :pedido";
      
      if($cliente != null){
       
        $query .= " AND p.ped_cliente = {:cliente}";
        $params[':cliente'] = (int)$cliente;
      }  

      $params[':pedido'] = (int)$pedido;

      $this->ExecuteSQL($query, $params);
      $this->GetLista();   
    }


       private function GetLista(){
        
        $i = 1; $sub = 0;
        while ($lista = $this->ListarDados()):
            
        // subtotal de cada item     
        $sub =   $lista['item_valor'] *  $lista['item_qtd'];
        $this->total_valor +=  $sub;
            
            
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
                'item_id'  => $lista['item_id'],
                'item_nome'  => $lista['pro_nome'],
                'item_valor'  => Sistema::MoedaBR($lista['item_valor']),
                'item_valor_us'  => $lista['item_valor'],
                'item_qtd'  => $lista['item_qtd'],
                'item_img'  => Rotas::ImageLink($lista['pro_img'], 60, 60) ,
                'item_sub'  => Sistema::MoedaBR($sub),
                'item_sub_us'  => $sub,
            
            );
        
        
            $i++;
        
        endwhile;
        
        }


        function GetTotal(){
        	return $this->total_valor;
        }

    }


 ?>

