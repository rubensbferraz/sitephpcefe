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
	    <?php ini_set('default_charset', 'utf-8'); ?>

	    <?php
        $id             = $_GET['idPalestra'];
        $data           = $_GET['dataPalestra'];
        $orador    = utf8_decode($_GET['oradorPalestra']);
        $tema           = utf8_decode($_GET['temaPalestra']);
        $diretor        = utf8_decode($_GET['diretorPalestra']);
        $semana         = $_GET['semanaPalestra'];

        $sql = mysqli_query($conn, "UPDATE  `tb_palestra` SET semanaPalestra='$semana', oradorPalestra='$orador', dataPalestra='$data', diretorPalestra='$diretor', temaPalestra='$tema' WHERE idPalestra=$id") or die("mysql error:" . mysqli_error($conn) . "<hr>\nQuery: $sql");

        echo ("Alteração realizada com sucesso...");
        header("Location: palestra.php", 3000);

        ?>

	</body>

	</html>