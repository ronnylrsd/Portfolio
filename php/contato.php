<?php

if(isset($_POST['name']) && !empty($_POST['name']))
if(isset($_POST['email']) && !empty($_POST['email']))
if(isset($_POST['subject']) && !empty($_POST['subject']))
if(isset($_POST['message']) && !empty($_POST['message']))

$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$assunto = addcslashes($_POST['subject']);
$mensagem = addcslashes($_POST['message']);

$to = "ronnylrsd@gmail.com";
$subject = "Contato - Portfolio";
$body = "Nome: ".$nome."\r\n".
        "Email: ".$email."\r\n".
        "Assunto: ".$assunto."\r\n".
        "Mensagem: ".$message.;
$header = "From:ronnylrsd@gmail.com"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();
if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}
else{
    echo("Email não pode ser enviado!");
}
?>