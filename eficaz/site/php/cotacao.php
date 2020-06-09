<?php

if(isset($_POST['telefone']) && !empty($_POST['telefone']) &&
 isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['nome']);
$telefone = addslashes($_POST['telefone']);
$email = addslashes($_POST['email']);
$estado = addslashes($_POST['estado']);
$cidade = addslashes($_POST['cidade']);
$marca = addslashes($_POST['marca']);
$fabricacao = addslashes($_POST['fabricacao']);
$modelo = addslashes($_POST['modelo']);


$to = "contato@eficazprotecao.com.br";
$subject = "Cotação - SITE";
$body = "Nome : ".$nome."\r\n".
        "Telefone: ".$telefone."\r\n".
        "Email: ".$email."\r\n".
        "Estado: ".$estado."\r\n".
        "Cidade: ".$cidade."\r\n".
        "Marca: ".$marca."\r\n".
        "Fabricação: ".$fabricacao."\r\n".
        "Modelo: ".$modelo."\r\n\r\n".
$header = "From:dev@eficazprotecao.com.br"."\r\n".
        "Reply-To:".$email."\r\n".
        "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
  echo "<script> alert('Cotação solicitada com sucesso!'); location= './../index.html'; </script>";
}else{
  echo "<script> alert('Ocorreu um erro e não foi enviado!'); location= './../index.html'; </script>";
}
}else{
echo "<script> alert('Ocorreu um erro e não foi enviado!'); location= './../index.html'; </script>";
}
?>

