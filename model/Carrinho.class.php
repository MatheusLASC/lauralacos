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
            echo '<h1 class="alert alert-danger"> Não há produtos no carrinho </h1>';
        }
    
    }

    function GetTotal(){
		return $this->total_valor;
	}

	function GetPeso(){
		return $this->total_peso;
    }
    function CarrinhoADD($id){
        $produtos = new Produtos();
        $produtos->GetProdutosID($id);
        foreach ($produtos->GetItens() as $pro){
            $ID = $pro['pro_id'];
            $NOME  = $pro['pro_nome'];
            $VALOR_US = $pro['pro_valor_us'];
            $VALOR  = $pro['pro_valor'];
            /* $PESO  = $proc['proc_peso']; */
            $QTD   = 1;
            $IMG   = $pro['pro_img'];
            $LINK  = Rotas::pag_ProdutosInfo().'/'.$ID.'/'.$pro['pro_slug'];
            $ACAO  = $_POST['acao'];

        }
        switch ($ACAO) {
			case 'add':
					if(!isset($_SESSION['PROC'][$ID]['ID'])){
						$_SESSION['PROC'][$ID]['ID'] = $ID;
						$_SESSION['PROC'][$ID]['NOME']  = $NOME;
					    $_SESSION['PROC'][$ID]['VALOR'] = $VALOR;
					    $_SESSION['PROC'][$ID]['VALOR_US'] = $VALOR_US;
					    /* $_SESSION['PROC'][$ID]['PESO']  = $PESO; */
					    $_SESSION['PROC'][$ID]['QTD']   = $QTD;
					    $_SESSION['PROC'][$ID]['IMG']   = $IMG;
					    $_SESSION['PROC'][$ID]['LINK']  = $LINK;  
					}else{
						 $_SESSION['PROC'][$ID]['QTD']   += $QTD;
					}

					echo '<h1 class="alert alert-success"> Produto Inserido! </h1>';

				break;

			case 'del':
				$this->CarrinhoDEL($id);
				echo '<h1 class="alert alert-success"> Produto Removido! </h1>';
				break;

			case 'limpar':
				$this->CarrinhoLimpar();
				echo '<h1 class="alert alert-success"> Produtos Removidos! </h1>';
				break;
            default:
            break;
		}
    }
    private function CarrinhoDEL($id){
        

        if($_SESSION['PROC'][$id]['QTD']>=2)
        {
            $_SESSION['PROC'][$id]['QTD']-=1;
        }
        else
        {
            unset($_SESSION['PROC'][$id]);
        }

        if(count($_SESSION['PROC'])<=0)
        {
            unset($_SESSION['PROC']);
        }
	}

	private function CarrinhoLimpar(){
		unset($_SESSION['PROC']);
	}
    
}




?>