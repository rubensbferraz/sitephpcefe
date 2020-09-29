<?php 

$hora = date('G');
if(($hora >= 0) AND ($hora < 6)){
    $mensagem = "boa madrugada!";
}else if(($hora >= 6) AND ($hora < 12)){
    $mensagem = "Bom dia!";
}else if(($hora >= 12) AND ($hora < 18)){
    $mensagem = "Bom dia!";
}else{
    $mensagem = "Boa Noite!";
}
 echo $mensagem;
?>