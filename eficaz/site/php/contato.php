<?php

if(isset($_POST['email'] && !empty($_POST['email']))){

$nome = addslashes($_POST['fname']);
$sobrenome = addslashes($_POST['lname']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "contato@eficazprotecao.com.br";
$subject = "Contato - SITE";
$body = "Nome: ".$fname."\r\n".
        " Sobrenome: ".$lname."\r\n".
        "Email: ".$email."\r\n".
        "Mensagem: ".$message;
$header = "From:dev@eficazprotecao.com.br"."\r\n".
        "Reply-To:".$email."\r\n".
        "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
  echo("Email enviado com sucesso!");
}else{
  echo("Email não pode ser enviado!");
}
}

?>