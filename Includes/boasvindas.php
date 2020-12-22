<?php 

$hora = idate("G");

if(($hora >= 00) AND ($hora < 06)){
    $mensagem = "boa madrugada!";
}else if(($hora >= 06) AND ($hora < 12)){
    $mensagem = "Bom dia!";
}else if(($hora >= 12) AND ($hora < 18)){
    $mensagem = "Bom Tarde!";
}else{
    $mensagem = "Boa Noite!";
}
 echo $mensagem;
?>