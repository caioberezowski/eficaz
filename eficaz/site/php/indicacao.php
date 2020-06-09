<?php

if(isset($_POST['telefoneindicador']) && !empty($_POST['telefoneindicador']) &&
 isset($_POST['telefoneindicado']) && !empty($_POST['telefoneindicado'])){

$nomeindicador = addslashes($_POST['nomeindicador']);
$nomeindicado = addslashes($_POST['nomeindicado']);
$telefoneindicador = addslashes($_POST['telefoneindicador']);
$telefoneindicado = addslashes($_POST['telefoneindicado']);

$to = "contato@eficazprotecao.com.br";
$subject = "Indicação - SITE";
$body = "INDICADOR \r\n".
        "Nome : ".$nomeindicador."\r\n".
        "Telefone: ".$telefoneindicador."\r\n".
        "INDICADO \r\n".
        "Nome : ".$nomeindicado."\r\n".
        "Telefone: ".$telefoneindicado."\r\n\r\n".
$header = "From:dev@eficazprotecao.com.br"."\r\n".
        "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
  echo "<script> alert('Indicação enviada com sucesso!'); location= './../index.html'; </script>";
}else{
  echo "<script> alert('Ocorreu um erro e não foi enviado!'); location= './../index.html'; </script>";
}
}else{
echo "<script> alert('Ocorreu um erro e não foi enviado!'); location= './../index.html'; </script>";
}
?>

