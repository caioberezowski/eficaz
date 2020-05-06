<?php


$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "caioberezowski@gmail.com";
$subject = "Contato - SITE";
$body = "Nome: ".$fname."\r\n".
        "Email: ".$email."\r\n".
        "Mensagem: ".$mesage;
$header = "From:dev@eficazprotecao.com.br"."\r\n".
        "Reply-To:".$email."\r\n".
        "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
  echo("Email enviado com sucesso!");
}else{
  echo("Email não pode ser enviado!");
}


?>