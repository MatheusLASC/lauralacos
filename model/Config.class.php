<?php

Class Config{
    //DO SITE
    const SITE_URL = "http://localhost";
    const SITE_PASTA = "lauralacos";
    const SITE_NOME = "Laura Laços";
    //precisa mudar depois
    const SITE_EMAIL_ADM = "matheuslima.tipi@gmail.com";
    //BANCO DE DADOS
    const BD_HOST = "localhost",
    BD_USER= "root",
    BD_SENHA = "",
    BD_BANCO = "lauralacos",
    BD_PREFIX = "tb_";

    //PHP MAILLER
    // devo alterar depois
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "matheuslima.tipi@gmail.com";
    const EMAIL_NOME = "Contato Laura Laços";
    const EMAIL_SENHA = "lauralacos";
    const EMAIL_PORTA= 587;
    const EMAIL_SMTPAUTH= true;
    const EMAIL_SMTPSECURE= "tls";
    const EMAIL_COPIA= "tls";
}

?>