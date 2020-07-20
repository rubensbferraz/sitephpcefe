	<!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="IE=edge charset=ISO-8859-1">
    </head>
    <body>
    <?php
    include "../../../conexao/conexao.php";
    ?>
    <?php  ini_set('default_charset','utf-8'); ?>

 <?php 
        $id             = $_GET['IdPalestra'];
        $data           = $_GET['DataPalestra'];
        $palestrante    = utf8_decode($_GET['Palestrante']);
        $tema           = utf8_decode($_GET['TemaPalestra']);
        $diretor        = utf8_decode($_GET['DiretorPalestra']);
        $semana         = $_GET['Semana'];

        $sql = mysqli_query($conn, "UPDATE  `palestra` SET Semana='$semana', Palestrante='$palestrante', DataPalestra='$data', DiretorPalestra='$diretor', TemaPalestra='$tema' WHERE IdPalestra=$id")or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $sql");
            
            echo("Alteração realizada com sucesso...");
             header("Location: palestra.php",3000);

?>

    </body>
    </html>