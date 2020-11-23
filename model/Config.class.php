<?php

Class Config{
  
  //Configurações Locais
  
  //DO SITE
    const SITE_URL = "http://localhost";
    const SITE_PASTA = "lauralacos";
    const SITE_NOME = "Laura Laços";
    //Alterar e-mail para pessoa que for usar
    const SITE_EMAIL_ADM = "180770@facens.br";

    //BANCO DE DADOS
    const BD_HOST = "localhost",
    BD_USER= "root",
    BD_SENHA = "",
    BD_BANCO = "lauralacos",
    BD_PREFIX = "tb_",

    BD_LIMIT_PAG = 3;
  const SITE_CEP = '18114070';
  
  /* 
      //Configurações do Site Hospedado

   const SITE_URL = "http://lauralacos-cc.umbler.net";
   const SITE_PASTA = "";
   const SITE_NOME = "Laura Laços";
   //Alterar e-mail para pessoa que for usar
   const SITE_EMAIL_ADM = "180770@facens.br";

   //BANCO DE DADOS
   const BD_HOST = "mysql741.umbler.com",
   BD_USER= "paiv",
   BD_SENHA = "malp42020",
   BD_BANCO = "lauralacos",
   BD_PREFIX = "tb_",

   BD_LIMIT_PAG = 3;
 const SITE_CEP = '18114070';

 */
    //PHP MAILLER
     //Alterar e-mail para pessoa que for usar
  //const EMAIL_HOST = "smtp.office365.com";
    const EMAIL_HOST = "smtp.gmail.com";
  //const EMAIL_USER = "180770@facens.br";
    const EMAIL_USER = "gaivotaxp@gmail.com";
    const EMAIL_NOME = "Laura Laços";
  //const EMAIL_SENHA = "facens";
    const EMAIL_SENHA = "gq.gxp2020";
    const EMAIL_PORTA= 587;
    const EMAIL_SMTPAUTH= true;
    //Secure exclusiva do Hotmail
    //const EMAIL_SMTPSECURE= "STARTTLS";
    const EMAIL_COPIA= "pa.integra2020@gmail.com";

    // Configurações para o PagSeguro
    const PS_EMAIL  = "lorraine.paloschi@gmail.com"; // meu email do pagseguro
    const PS_TOKEN  = "85DDFF2A601348A4BA17C9C70E9E1656"; // token da produção (para testes)
    const PS_TOKEN_SBX = "2D37D781026448E8B4B95EF2B8C92110";  // token do sandbox (valores reais)
    const PS_AMBIENTE = "production"; // production (para testes)   /  sandbox (valores reais)

}

?>