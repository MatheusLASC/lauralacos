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
        //$lista = $this->ListarDados();

        //$_SESSION['CLI']['cli_id'] = $lista['cli_id'];

        echo 'Login efetuado';
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

}


?>