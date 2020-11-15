<?php

class Login extends Conexao{

    private $user, $senha;

    function __construct()
    {
        parent::__construct();
    }

    function GetLogin($user, $senha)
    {
        $this->setUser($user);
        $this->setSenha($senha);

    $query = "SELECT * FROM {$this->prefix}clientes WHERE cli_email = :email AND cli_pass = :senha";

    //aqui será completado em tutoriais futuros
    $params = array(
        ':email' => $this->getUser(),
        ':senha'=> $this->getSenha(),
    );

    $this->ExecuteSQL($query, $params);

    if($this->TotalDados() > 0)
    {
        $lista = $this->ListarDados();

        $_SESSION['CLI']['cli_id'] = $lista['cli_id'];
        $_SESSION['CLI']['cli_nome'] =  $lista['cli_nome'];
        $_SESSION['CLI']['cli_telefone']  =  $lista['cli_telefone'];
        $_SESSION['CLI']['cli_email']  =  $lista['cli_email'];
        $_SESSION['CLI']['cli_cpf'] =  $lista['cli_cpf'];
        $_SESSION['CLI']['cli_endereco']  =  $lista['cli_endereco'];
        $_SESSION['CLI']['cli_numero'] =  $lista['cli_numero'];
        $_SESSION['CLI']['cli_complemento'] =  $lista['cli_complemento'];
        $_SESSION['CLI']['cli_bairro'] =  $lista['cli_bairro'];
        $_SESSION['CLI']['cli_cidade']  =  $lista['cli_cidade'];
        $_SESSION['CLI']['cli_uf'] =  $lista['cli_uf'];
        $_SESSION['CLI']['cli_cep'] =  $lista['cli_cep'];
        $_SESSION['CLI']['cli_pass']   =  $lista['cli_pass']; 
        $_SESSION['CLI']['cli_datacad']  =  $lista['cli_datacad'];
        $_SESSION['CLI']['cli_horacad']  =  $lista['cli_horacad'];
         

        Rotas::Redirecionar(0, Rotas::pag_CLienteLogin());
    }
    else
    {
        echo 'Login não efetuado';
    }
    
    }

    private function setUser($user)
    {
        $this->user = $user;
    }

    private function setSenha($senha)
    {
        $this->senha = Sistema::Criptografia($senha);
    }

    function getUser()
    {
        return $this->user;
    }

    function getSenha()
    {
        return $this->senha;
    }

    static function AcessoNegado(){
		echo '<div class="alert alert-danger"><a href="'.Rotas::pag_ClienteLogin().'" class="btn btn-danger">Login </a> Acesso Negado, faça Login</div>';
    }
    
    static function Logado(){
		if(isset($_SESSION['CLI']['cli_email']) && isset($_SESSION['CLI']['cli_id'])){
			return TRUE;
		}else{
			return FALSE;
		}
	}


    	//funcao para mostrar o menu do cliente
	static function MenuCliente(){
        
        // verifo se não esta logado 
               if(!self::Logado()):
   
                   self::AcessoNegado();
                   Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());
                                 
                   // caso nao redirecione  saiu  do bloco
                   exit();
                               
               // caso esteja mostra a tela minha conta 
               else:
                   
           $smarty = new Template();
           
           $smarty->assign('PAG_CONTA', Rotas::pag_ClienteConta());
           $smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
           $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
           $smarty->assign('PAG_CLIENTE_PEDIDOS', Rotas::pag_ClientePedidos());
           /*
           $smarty->assign('PAG_CLIENTE_DADOS', Rotas::pag_ClienteDados());
           $smarty->assign('PAG_CLIENTE_SENHA', Rotas::pag_ClienteSenha());
           */

           $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
           
           $smarty->display('menu_cliente.tpl');
           
                 endif;
       }
   
}


?>