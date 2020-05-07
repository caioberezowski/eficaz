<?php

if(isset($_POST['telefone']) && !empty($_POST['telefone']) &&
 isset($_POST['nome']) && !empty($_POST['nome'])){

$nome = addslashes($_POST['nome']);
$telefone = addslashes($_POST['telefone']);

$to = "caioberezowski@gmail.com";
$subject = "Ligue para mim - SITE";
$body = "Nome: ".$nome."\r\n".
        "Telefone: ".$telefone."\r\n".
$header = "From:dev@eficazprotecao.com.br"."\r\n".
        "Reply-To:".$email."\r\n".
        "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
  echo "<script> alert('Enviado com sucesso!'); location= './../index.html'; </script>";
}else{
  echo "<script> alert('Ocorreu um erro e não foi enviado!'); location= './../index.html'; </script>";
}
}

?>

