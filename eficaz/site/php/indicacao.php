<?php

if(isset($_POST['email']) && !empty($_POST['email']) &&
 isset($_POST['mensagem']) && !empty($_POST['mensagem'])){

$nomeindicador = addslashes($_POST['nomeindicador']);
$nomeindicado = addslashes($_POST['nomeindicado']);
$telefoneindicador = addslashes($_POST['telefoneindicador']);
$telefoneindicado = addslashes($_POST['telefoneindicado']);

$to = "caioberezowski@gmail.com";
$subject = "Indicação - SITE";
$body = "Nome: ".$nome."\r\n".
        "Email: ".$email."\r\n".
        "Mensagem: ".$mensagem;
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

