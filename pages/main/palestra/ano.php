	<!DOCTYPE html>
	<html>

	<head>
	    <?php include "../../../conexao/conexao.php"; ?>
	    <title></title>
	    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	</head>

	<body>
	    <?php
        //Leitura da data
        $dia = date('d');
        $mes = date('m');
        $ano = date('Y');
        $sma = date('w');
        //Configuração para os meses
        switch ($mes) {
            case 1:
                $mes = "Janeiro";
                break;
            case 2:
                $mes = "Fevereiro";
                break;
            case 3:
                $mes = "Março";
                break;
            case 4:
                $mes = "Abril";
                break;
            case 5:
                $mes = "Maio";
                break;
            case 6:
                $mes = "Junho";
                break;
            case 7:
                $mes = "Julho";
                break;
            case 8:
                $mes = "Agosto";
                break;
            case 9:
                $mes = "Setembro";
                break;
            case 10:
                $mes = "Outubro";
                break;
            case 11:
                $mes = "Novembro";
                break;
            case 12:
                $mes = "Dezembro";
                break;
        }
        //Configuração das semanas
        switch ($sma) {
            case 0:
                $sma = "Domingo";
                break;
            case 1:
                $sma = "Segunda";
                break;
            case 2:
                $sma = "Terça";
                break;
            case 3:
                $sma = "Quarta";
                break;
            case 4:
                $sma = "Quinta";
                break;
            case 5:
                $sma = "Sexta";
                break;
            case 6:
                $sma = "Sábado";
                break;
        }
        ?>

	    <?php
        $data           = $_POST['dataPalestra'];
        $orador    = utf8_decode($_POST['oradorPalestra']);
        $tema           = utf8_decode($_POST['temaPalestra']);
        $diretor        = utf8_decode($_POST['diretorPalestra']);
        $semanas        = $_POST['semanaPalestra'];

        if (isset($_POST['cadastrar'])) {

            $sql = mysqli_query($conn, "INSERT INTO tb_palestra (dataPalestra, oradorPalestra, temaPalestra, diretorPalestra, semanaPalestra)
                values('$data', '$orador', '$tema', '$diretor', '$semanas')");

            echo ("Palestra cadastrada com sucesso..");
            header("Location: palestra.php", 3000);
        }

        ?>

	</body>

	</html>