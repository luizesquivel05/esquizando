<?php
$para = "eesquizando@gmail.com";
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$conteudo = $_POST['conteudo'];

$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  dominio.com.br<sistema@dominio.com.br>\n";
$headers .= "X-Sender:  <sistema@dominio.com.br>\n";
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <sistema@dominio.com.br>\n";
$headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);
?>