<?php

if(isset($_POST['telefoneligue']) && !empty($_POST['telefoneligue']) &&
 isset($_POST['nomeligue']) && !empty($_POST['nomeligue'])){

$nomeligue = addslashes($_POST['nomeligue']);
$telefoneligue = addslashes($_POST['telefoneligue']);

$to = "contato@eficazprotecao.com.br";
$subject = "Ligue para mim - SITE";
$body = "Nome: ".$nomeligue."\r\n".
        "Telefone: ".$telefoneligue."\r\n\r\n".
$header = "From:dev@eficazprotecao.com.br"."\r\n".
        "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
  echo "<script> alert('Logo entraremos em contato!'); location= './../index.html'; </script>";
}else{
  echo "<script> alert('Ocorreu um erro e não foi enviado!'); location= './../index.html'; </script>";
}
}else{
  echo "<script> alert('Ocorreu um erro e não foi enviado!'); location= './../index.html'; </script>";
}

?>

