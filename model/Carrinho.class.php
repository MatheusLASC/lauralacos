<?php

class Carrinho
{
    //$lacounit- peso para calcular o frete, os valores são todos iguais - colocar o valor do peso aqui
    // o  peso dever ser em kg - ou seja 50g = 0.050 Kg
    private $total_valor, $total_peso,$lacounit=0.050, $itens = array();

    //Os erros que aparecem serão corrigidos no próximo tutorial
    function GetCarrinhos($sessao=NULL)
    {
        //peso eu acredito que é uma quantidade fixa, perguntar para a Laura qual o peso de um laço
        $i = 1; $sub = 1.00; $peso = 0;
        //o que eu passo na sessão cai no array lista
        // o PROC é igual ao PRO do carrinho que tá no tutorial
        foreach ($_SESSION['PROC'] as $lista)
        {
            $sub = ($lista['VALOR_US'] * $lista['QTD']);
            $this->total_valor += $sub;
            
            $peso = $this->lacounit *  $lista['QTD'];
            $this->total_peso += $peso;
            
            $this->itens[$i] = array(
                //Observar melhores esses parametros para ver se tem haver com nosso projeto
                'proc_id' => $lista['ID'],
                'proc_nome' => $lista['NOME'],
                'proc_valor' => $lista['VALOR'], // exibe o valor no padrão brasileiro
                'proc_valor_us' => $lista['VALOR_US'], //valor que salva no banco é o americano
                'proc_qtd' => $lista['QTD'],
                'proc_img' => $lista['IMG'],
                //talvez o nome tá diferente
                'proc_link' => $lista['LINK'],
                'proc_subTotal' => Sistema::MoedaBR($sub),
                //salva o valor americano no banco
                'proc_subTotal_us' => $sub
            );
            $i++;
        }

        if(count($this->itens)>0)
        {
            return $this->itens;
        } else
        {
            echo '<h4 class="alert alert-danger"> Não há produtos no carrinho </h4>';
        }
    
    }

    function GetTotal(){
		return $this->total_valor;
	}

	function GetPeso(){
		return $this->total_peso;
	}
}


?>