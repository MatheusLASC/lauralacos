<?php

//Caso não funcione quando for subir no servidor pode alterar o post por GET
//Warning: mail(): Ocorre pois o site não está no servidor e não consegue identificar a porta
//destinatário
$dest = $_POST['email'];
//nome do destinatário
$nome = $_POST['name'];
//celular
$cel = $_POST['celular'];
//remetente
$to = Config::EMAIL_USER;
//assunto
$subject = 'Assunto: ' . $_POST['assunto'];
//mensagem
$message = 'Email de : ' . $nome . "\r\n" .'Celular: ' .$cel . "\r\n" . $_POST['texto'];

$headers = "From: ".$dest;

//teste para mostrar as variáveis
echo '<pre>';
echo $to;
echo '</pre>';
echo '<pre>';
echo $subject;
echo '</pre>';
echo $message;
echo '<pre>';
echo $headers;
echo '</pre>';


mail($to, $subject , $message , $headers);

?>
<script>alert('Email enviado com sucesso!')</script>
<meta http-equiv="refresh" content="0; url=contato">