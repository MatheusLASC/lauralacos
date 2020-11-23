<?php

class Clientes extends Conexao
{
    private $cli_nome,
    $cli_telefone,
    $cli_email,
    $cli_cpf,
    $cli_cep,
    $cli_endereco,
    $cli_numero,
    $cli_complemento,
    $cli_bairro,
    $cli_cidade,
    $cli_uf,
    $cli_senha,
    $cli_datacad,
    $cli_horacad;

    function __construct(){
		parent::__construct();
    }
    
    //Função preparando os dados para cadastro
    function Preparar($cli_nome, $cli_telefone, $cli_email, $cli_cpf, 
    $cli_cep,$cli_endereco, $cli_numero, $cli_complemento,$cli_bairro,$cli_cidade,$cli_uf,
    $cli_senha, $cli_data_cad,$cli_hora_cad)

    {
    $this->setCli_nome($cli_nome);
    $this->setCli_fone($cli_telefone);
    $this->setCli_email($cli_email);
    $this->setCli_cpf($cli_cpf);
    $this->setCli_cep($cli_cep);
    $this->setCli_endereco($cli_endereco);
    $this->setCli_numero($cli_numero);
    $this->setCli_complemento($cli_complemento);
    $this->setCli_bairro($cli_bairro);
    $this->setCli_cidade($cli_cidade);
    $this->setCli_uf($cli_uf);
    $this->setCli_senha($cli_senha);
    $this->setCli_data_cad($cli_data_cad);
    $this->setCli_hora_cad($cli_hora_cad);
    }


    function Inserir(){
    	if($this->GetClienteCPF($this->getCli_cpf()) > 0){
    		echo '<h1 class="alert alert-danger " id="erro_mostrar"> Este CPF já existe';
    		Rotas::Redirecionar(2, Rotas::pag_ClienteCadastro());
    		echo '  </h1>';
    		exit();
    	}

    	if($this->GetClienteEmail($this->getCli_email()) > 0){
    		echo '<h1 class="alert alert-danger " id="erro_mostrar"> Este Email já existe';
    		Rotas::Redirecionar(2, Rotas::pag_ClienteCadastro());
    		echo '  </h1>';
    		exit();
    	}


    	//INSERIR OS DADOS

    	//query para inserir clientes

  $query = " INSERT INTO {$this->prefix}clientes (cli_nome, cli_telefone, cli_email, cli_cpf, cli_endereco, cli_numero, cli_complemento, cli_bairro, cli_cidade, cli_uf, cli_cep, cli_pass, cli_datacad, cli_horacad)";   
        $query .=" VALUES ";
        $query .=" (:cli_nome, :cli_telefone, :cli_email, :cli_cpf, :cli_endereco, :cli_numero, :cli_complemento, :cli_bairro, :cli_cidade, :cli_uf, :cli_cep, :cli_pass, :cli_datacad, :cli_horacad)"; 
   
        $params = array(
        ':cli_nome'     => $this->getCli_nome() ,  
        ':cli_telefone'     => $this->getCli_fone() ,
        ':cli_email'    => $this->getCli_email() ,   
        ':cli_cpf'      => $this->getCli_cpf() ,        
        ':cli_endereco' => $this->getCli_endereco() ,   
        ':cli_numero'   => $this->getCli_numero() ,
        ':cli_complemento'   => $this->getCli_complemento() ,   
        ':cli_bairro'   => $this->getCli_bairro() ,   
        ':cli_cidade'   => $this->getCli_cidade() ,   
        ':cli_uf'       => $this->getCli_uf() ,   
        ':cli_cep'      => $this->getCli_cep() , 
        ':cli_pass'      => $this->getCli_senha() ,          
        ':cli_datacad' => $this->getCli_data_cad() ,   
        ':cli_horacad' => $this->getCli_hora_cad()            
        );
        
            $this->ExecuteSQL($query, $params);
 

    }

    //BUSCAR SE O CPF DO CLIENTE JÁ EXISTE
    function GetClienteCPF($cpf){
    	$query = "SELECT * FROM {$this->prefix}clientes ";
    	$query .= " WHERE cli_cpf = :cpf ";
    	$params = array(':cpf'=> $cpf);
    	$this->ExecuteSQL($query, $params);
    	return $this->TotalDados();
    }


    //BUSCAR SE O EMAIL DO CLIENTE JÁ EXISTE
    function GetClienteEmail($email){
    	$query = "SELECT * FROM {$this->prefix}clientes ";
    	$query .= " WHERE cli_email = :email ";
    	$params = array(':email'=> $email);
    	$this->ExecuteSQL($query, $params);
    	return $this->TotalDados();
    }

    //Recuperando Senha e Atualizando senha
    function SenhaUpdate($senha, $email){
    	$query = "UPDATE {$this->prefix}clientes SET cli_pass = :senha";
    	$query .= " WHERE cli_email = :email ";
    	$this->setCli_senha($senha);
    	$this->setCli_email($email);
    	$params = array(':senha'=> $this->getCli_senha(), ':email'=> $this->getCli_email());
    	$this->ExecuteSQL($query, $params);
    }

    //MÉTODO EDITAR
    function Editar($id){
        
              
        // verifico se ja tem este CPF no banco
      if($this->GetClienteCPF($this->getCli_cpf()) > 0 && $this->getCli_cpf() != $_SESSION['CLI']['cli_cpf']):
              echo '<h1 class="alert alert-danger " id="erro_mostrar"> Este CPF já esta cadastrado </h1>';
              Rotas::Redirecionar(3,Rotas::pag_ClienteDados());
              exit();
      endif;
        // verifica se o email já esta cadastrado 
        if($this->GetClienteEmail($this->getCli_email()) > 0 && $this->getCli_email() != $_SESSION['CLI']['cli_email']):
            echo '<h1 class="alert alert-danger " id="erro_mostrar"> Este E-mail já esta cadastrado </h1>';
            Rotas::Redirecionar(3,Rotas::pag_ClienteDados());
              exit();
      endif;
      
      
      // caso passou na verificação grava no banco
      
      $query = " UPDATE {$this->prefix}clientes SET cli_nome=:cli_nome, cli_telefone=:cli_telefone, cli_email=:cli_email, cli_cpf=:cli_cpf, cli_endereco=:cli_endereco, cli_numero=:cli_numero, cli_complemento=:cli_complemento, cli_bairro=:cli_bairro, cli_cidade=:cli_cidade, cli_uf=:cli_uf, cli_cep=:cli_cep, cli_pass=:cli_pass, cli_datacad=:cli_datacad, cli_horacad=:cli_horacad ";
      $query .=" WHERE  cli_id = :cli_id";  

      $params = array(
        ':cli_nome'     => $this->getCli_nome() ,  
        ':cli_telefone'     => $this->getCli_fone() ,
        ':cli_email'    => $this->getCli_email() ,   
        ':cli_cpf'      => $this->getCli_cpf() ,        
        ':cli_endereco' => $this->getCli_endereco() ,   
        ':cli_numero'   => $this->getCli_numero() ,
        ':cli_complemento'   => $this->getCli_complemento() ,   
        ':cli_bairro'   => $this->getCli_bairro() ,   
        ':cli_cidade'   => $this->getCli_cidade() ,   
        ':cli_uf'       => $this->getCli_uf() ,   
        ':cli_cep'      => $this->getCli_cep() , 
        ':cli_pass'      => $this->getCli_senha() ,          
        ':cli_datacad' => $this->getCli_data_cad() ,   
        ':cli_horacad' => $this->getCli_hora_cad(),  
        ':cli_id'       => (int)$id   
          
      );
            
                 
          if($this->ExecuteSQL($query, $params))
          {
            return true;
          }        
  }

    //Métodos Gets
    function getCli_nome() {
        return $this->cli_nome;
    }

    function getCli_cpf() {  
        return $this->cli_cpf; 
    }

    function getCli_fone() {
        return $this->cli_telefone;
    }

    function getCli_endereco() {
        return $this->cli_endereco;
    }
    
    function getCli_numero(){
        
        return $this->cli_numero;
        
    }

    function getCli_complemento(){
        
        return $this->cli_complemento;
        
    }

    function getCli_bairro() {
        return $this->cli_bairro;
    }

    function getCli_cidade() {
        return $this->cli_cidade;
    }

    function getCli_uf() {
        return $this->cli_uf;
    }

    function getCli_cep() {
        return $this->cli_cep;
    }

    function getCli_email() {
        return $this->cli_email;
    }

    function getCli_data_cad() {
        return $this->cli_datacad;
    }

    function getCli_hora_cad() {
        return $this->cli_horacad;
    }

    function getCli_senha() {
        return $this->cli_senha;
    }


    function setCli_nome($cli_nome) {
       
        if(strlen($cli_nome) < 3):
            
              echo '<h1 class="alert alert-danger " id="erro_mostrar"> Digite seu nome corretamente </h1>';
              Rotas::Redirecionar(2, Rotas::pag_ClienteCadastro());
            else:
            $this->cli_nome = $cli_nome;   
        endif;
        
        
    }

    function setCli_cpf($cli_cpf) {
        $this->cli_cpf = $cli_cpf;  
    }

    function setCli_fone($cli_fone) {
        $this->cli_telefone = $cli_fone;
    }


    function setCli_endereco($cli_endereco) {
        $this->cli_endereco = $cli_endereco;
    }
    
    function setCli_numero($cli_numero){
        
        $this->cli_numero = $cli_numero;
    }
    
    function setCli_complemento($cli_complemento) {
        $this->cli_complemento = $cli_complemento;
    }

    function setCli_bairro($cli_bairro) {
        $this->cli_bairro = $cli_bairro;
    }

    function setCli_cidade($cli_cidade) {
        $this->cli_cidade = $cli_cidade;
    }

    function setCli_uf($cli_uf) {
        
         $uf = filter_var($cli_uf, FILTER_SANITIZE_STRING);
        
       if(strlen($uf) != 2): // 11111
                echo '<h1 class="alert alert-danger " id="erro_mostrar"> UF incorreto </h1>';
                Rotas::Redirecionar(2, Rotas::pag_ClienteCadastro());
           else:
           $this->cli_uf = $cli_uf;
       endif;
            
    }

    function setCli_cep($cli_cep) {
        
       $cep = filter_var($cli_cep, FILTER_SANITIZE_NUMBER_INT);
        
       if(strlen($cep) != 8):
                echo '<h1 class="alert alert-danger " id="erro_mostrar"> CEP incorreto, digite apenas números!! </h1>';
                Rotas::Redirecionar(2, Rotas::pag_ClienteCadastro());
           else:
           $this->cli_cep = $cli_cep;
       endif;
            
       
        
    }

    function setCli_email($cli_email) {
        
        if(!filter_var($cli_email, FILTER_VALIDATE_EMAIL)):
            
                echo '<h1 class="alert alert-danger " id="erro_mostrar"> Email incorreto </h1>'; 
                Rotas::Redirecionar(2, Rotas::pag_ClienteCadastro());
            exit();
            
        else:
                $this->cli_email = $cli_email;
        endif;
        
    
        
    }

    function setCli_data_cad($cli_data_cad) {
        $this->cli_datacad = $cli_data_cad;
    }

    function setCli_hora_cad($cli_hora_cad) {
        $this->cli_horacad = $cli_hora_cad;
    }

    function setCli_senha($cli_senha) {
       
        $this->cli_senha = md5($cli_senha);
        // Ex: 123 => md5 = 18513ba35987a447b98f075bd226a1fc
    }



}

?>