<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include("conexao/conexao.php") ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/cefe.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/carousel.css">
    <link rel="stylesheet" type="text/css" href="pginternas/ativo-comum/palestra/visualSemana.css">
    <link rel="stylesheet" type="text/css" href="includes/bootstrap/css/bootstrap.css">
    <title>Casa Espírita Fraternidade Emmanuel</title>
</head>
<body>
    <div class="corpo">
        <div class="menu">
            <?php include("cabeca/cabecalho.php"); ?>
        </div>
        <!-- incluindo o menu da pasta Includes -->
        <section>
            <div class="carousel">
                <?php include("includes/carousel.php"); ?>
            </div>
        </section>
        <div class="palestra">
            <?php include("pginternas/ativo-comum/palestra/palestraIndex.php"); ?>
        </div>
        <div class="internoPr">
            <?php include("pginternas/divulgacao/internoPrIndex.php"); ?>
        </div>
        <div class="internoSg">
            <?php include("pginternas/divulgacao/internoSgIndex.php"); ?>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="includes/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>