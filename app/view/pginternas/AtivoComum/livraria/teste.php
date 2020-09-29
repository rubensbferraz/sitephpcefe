<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../includes/bootstrap/css/bootstrap.css" type="text/css">
    <script src="../../../includes/jquery/jquery-3.5.1.min.js"></script> 
    <title>Cadastrando Títulos</title>
</head>
<body>
    <?php include ("../../../includes/navegacao.php"); 
          include ("../../../conexao/conexao.php");
          include ("querys.php");
    ?>
    <script>
        $('.dinheiro').mask('#.##0,00', {reverse: true}); 
    </script>
    <div class="container">
        <legend class="text-center bg-info text-white">Cadastrando Títulos</legend>
        <form class="container" action="gravarTitulo.php" method="POST" name="tb_teste2">
        <div class="row">
            <div class="col-md-4 bd-highlight">
            </div>
            <!-- Fim primeiro bloco -->
            <div class="col-md-4 bd-highlight">
            </div>
            <!-- Fim segundo bloco -->
            <div class="col-md-4 bd-highlight">
                <div class="form-group">
                    <label class="mb-0 p-0" for="idteste">Atuando Teste &nbsp &nbsp<span><a href="#"><img src="cadastro.png" alt="" srcset=""></a></span></label>
                    <select name="idteste" id="idteste" class="form-control">
                        <option value="">Entre com o Texto frutas</option>
                        <?php while($listaTeste = mysqli_fetch_array($listaTesteSql)){ ?>
                        <option value="<?php echo utf8_encode($listaTeste[0]);?>"><?php echo utf8_encode($listaTeste[0]);?></option>    
                        <?php } ?>
                    </select>
                </div>                                            
            </div>
            <!-- Fim terceiro bloco -->
        </div>
        <div class=" text-right mr-2 mb-2">
            <button class="btn btn-info" type="submit" name="cadastrar">Cadastrar</button>
            <button class="btn btn-info" type="submit" src="listarTitulos.php" name="listar">Listar</button>
        </div>
        </form>
        <legend class="text-center bg-info text-white">
            <span class="d-inline-block p-2 small">Você está no Sistema de Cadastro de Titulos -&nbsp<?php include ('../../../includes/boasvindas.php'); ?>&nbspdata de hoje:&nbsp<?php echo date('d/m/Y') ?></span>
        </legend>
    </div>
</body>
</html>