<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include("Config/conexao.php");
    include("Config/config.php");
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/cefe.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/carousel.css">
    <link rel="stylesheet" type="text/css" href="pages/main/palestra/visualSemana.css">
    <link rel="stylesheet" type="text/css" href="Includes/bootstrap/css/bootstrap.min.css">
    <title>Casa Espírita Fraternidade Emmanuel</title>
</head>

<body>
    <div class="corpo">
        <div class="menu">
            <?php include("pages/header/cabecalho.php"); ?>
        </div>
        <!-- incluindo o menu da pasta Includes -->
        <section>
            <div class="carousel">
                <?php include("Includes/carousel.php"); ?>
            </div>
        </section>
        <div class="palestra">
            <?php include("pages/main/palestra/palestraIndex.php"); ?>
        </div>
        <div class="internoPr">
            <?php include("pages/main/divulgacao/internoPrIndex.php"); ?>
        </div>
        <div class="internoSg">
            <?php include("pages/main/divulgacao/internoSgIndex.php"); ?>
        </div>
        <div class="Footer">
            <div class="container">
                <div class=" row footer col-md col-sm">
                    <div class="col">
                        <img src="<?PHP echo DIRIMG . "ImgRodape/criancasAbracadas.jpg"; ?>" alt="" srcset="">
                    </div>
                    <div class="col-8">
                        <h1 class="texto">Deus, Cristo e Caridade</h1>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row col-md col-sm">
                <div class="col">
                    <h6 class="text-center">Vila Buritis IV Quadra 26 lotes 8/11, Planaltina-DF</h6>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>