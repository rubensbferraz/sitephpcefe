<!DOCTYPE html>
<html lang="pt-br">
<?php

include("config/config.php");
include("Classes/Serivico/ClassTeste.php");

$teste = new Classes\Servico\Classteste();
echo $teste->peguei();
?>

<head>
    <?php include("config/conexao.php") ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/cefe.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/carousel.css">
    <link rel="stylesheet" type="text/css" href="pages/pginternas/ativo-comum/palestra/visualSemana.css">
    <link rel="stylesheet" type="text/css" href="includes/bootstrap/css/bootstrap.css">
    <title>Casa Espírita Fraternidade Emmanuel</title>
</head>

<body>
    <div class="corpo">
        <div class="menu">
            <?php include("pages/cabeca/cabecalho.php"); ?>
        </div>
        <!-- incluindo o menu da pasta Includes -->
        <section>
            <div class="carousel">
                <?php include("includes/carousel.php"); ?>
            </div>
        </section>
        <div class="palestra">
            <?php include("pages/pginternas/AtivoComum/palestra/palestraIndex.php"); ?>
        </div>
        <div class="internoPr">
            <?php include("pages/pginternas/divulgacao/internoPrIndex.php"); ?>
        </div>
        <div class="internoSg">
            <?php include("pages/pginternas/divulgacao/internoSgIndex.php"); ?>
        </div>
    </div>


    <script src="includes/bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="includes/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>