<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Includes/bootstrap/css/bootstrap.min.css" type="text/css">
    <script src="../../../js/jquery/jquery-3.5.1.min.js"></script> 
    <script src="../../../js/mostrarJavascrip.js"></script>
    <link rel="stylesheet" href="../../../css/styleMostrar.css">
    <title>Cadastrando Títulos</title>
</head>
<body>
    <?php 
        include ("../../../Config/config.php");
        include ("../../../Config/conexao.php");
        include ("querys.php");
    ?>
    <script>
        $('.dinheiro').mask('#.##0,00', {reverse: true}); 
    </script>
    <div class="container">
        <select name="select" id="select">
        <option value="">Selecione</option>
            <option value="1">Div 1</option>
            <option value="2">Div 2</option>
        </select>
        <div id='pai'>
            <div id='1'>
                Texto div 1
            </div>
            <div id='2'>
                <p>Texto referente a primeira p 2</p>
                <p>Texto referente a segunda p 2</p>
            </div>
        </div>
    </div>
</body>
</html>