	<!DOCTYPE html>
	<html>

	<head>
	    <?php include "../../../Config/conexao.php"; ?>
	    <title></title>
	    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	</head>

	<body>

	    <?php
        $data           = $_POST['dataPalestra']; 
        $orador    = $_POST['oradorPalestra'];
        $tema           = $_POST['temaPalestra'];
        $diretor        = $_POST['diretorPalestra'];
        $semanas        = $_POST['semanaPalestra'];

        
        $sql = "INSERT INTO tb_palestra(dataPalestra, oradorPalestra, temaPalestra, diretorPalestra, semanaPalestra) values('$data', '$orador', '$tema', '$diretor', '$semanas')"; 
		
		if(mysqli_query($conn, $sql)){
			echo ("Palestra cadastrada com sucesso..");
			header("Location: palestra.php", 3000);
		}else{
			echo "Erro:   ". $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
        
        ?>

	</body>

	</html>