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
  //const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_HOST = "smtp.office365.com";
  //const EMAIL_USER = "gaivotaxp@gmail.com";
    const EMAIL_USER = "180770@facens.br";
    const EMAIL_NOME = "Pedido - Laura Laços";
  //const EMAIL_SENHA = "gq.gxp2020";
    const EMAIL_SENHA = "facens";
    const EMAIL_PORTA= 587;
   // const EMAIL_SMTPAUTH= true;
    const EMAIL_SMTPSECURE= "STARTTLS";
    const EMAIL_COPIA= "pa.integra2020@gmail.com";
}

?>