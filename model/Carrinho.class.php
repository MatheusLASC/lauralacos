<?php

class Carrinho
{
    //$laco_pesounit - peso para calcular o frete, os valores são todos iguais ou precisa de variável no banco?
    private $total_valor, $laco_pesounit, $itens = array();

    //Os erros que aparecem serão corrigidos no próximo tutorial
    function GetCarrinhos($sessao=NULL)
    {
        $i = 1;  $sub=1.00;
        //o que eu passo na sessão cai no array lista
        foreach ($_SESSION['PROC'] as $lista)
        {
            $this->itens[$i] = array(
                //Observar melhores esses parametros para ver se tem haver com nosso projeto
                'proc_id' => $lista['ID'],
                'proc_nome' => $lista['NOME'],
                'proc_valor' => $lista['VALOR'],
                'proc_valor_us' => $lista['VALOR_US'], //valor em padrão americano, talvez não tenha o atributo
                'proc_qtd' => $lista['QTD'],
                'proc_img' => $lista['IMG'],
                //talvez o nome tá diferente
                'proc_link' => $lista['LINK'],
                //talvez a qtd ta de nome diferente eu acho
                'proc_subTotal' => Sistema::MoedaBR($sub),
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
}


?>