<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        ob_start();
        include ("../../../Config/conexao.php"); 
        include ("querys.php");

    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Includes/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../../../css/livraria.css"> 
    <title>Cadastrando Títulos</title>
</head>
<body>
    <div class="container" id="titulo">
        <?php  
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
        }
        include("Breadcrumb.php");
        ?>
        <legend class="text-center bg-info text-white">Cadastrando Títulos</legend>
        <form class="container" action="gravarTitulo.php" method="POST" name="tb_titulos">
            <input type="hidden" name="navegartitulo" value="<?php $_SESSION['titulo']="titulo" ?>">
            <div class="row">
                <div class="col-md-4 bd-highlight">
                    <div class="form-group">
                        <label class="mb-0 p-0" for="titulo">Título</label>
                        <input class="form-control" type="text" name="titulo">
                    </div>
                    <div class="form-group">
                        <label class="mb-0 p-0" for="descricao">descrição</label>
                        <input class="form-control" type="text" name="descricao">  
                    </div>
                    <div class="form-group">
                        <label class="mb-0 p-0" for="edicao">edição</label>
                        <input class="form-control" type="text" name="edicao">
                    </div>
                    <div class="form-group">
                        <label class="mb-0 p-0"  for="dtPublicacao">Publicação</label>
                        <input class="form-control" type="date"  name="dtPublicacao">
                    </div>
                </div>
                <!-- Fim primeiro bloco -->
                <div class="col-md-4 bd-highlight">
                    <div class="form-group">
                        <label class="mb-0 p-0" for="isbn">ISBN</label>
                        <input class="form-control" type="text" name="isbn">  
                    </div>
                    <div class="form-group">
                        <label class="mb-0 p-0" for="preco">Preço</label>
                        <input id="dinheiro" class="form-control" type="number" min="0.00" max="10000.00" step="0.01" name="preco">
                    </div>
                    <div class="form-group">
                        <label class="mb-0 p-0" for="ideditora">Editora &nbsp &nbsp<span><a href="#"><img src="cadastro.png" alt="" srcset=""></a></span></label>
                        <select name="ideditora" class="form-control" id="ideditora">
                            <option value="">Entre com a Editora</option>
                        <?php while($listaEd = mysqli_fetch_array($listaEdSql)){ ?>
                            <option value="<?php echo $listaEd[0];?>" ><?php echo $listaEd[1];?></option>
                        <?php }?>
                        </select>
                    </div>                                          
                </div>
                <!-- Fim segundo bloco -->
                <!-- inicio da interação com a tabela Composição -->
                <div class="col-md-4 bd-highlight">
                    <div class="form-group">
                        <label class="mb-0 p-0" for="idtipoobra">Tipo da Obra &nbsp &nbsp<span><a href="#"><img src="cadastro.png" alt="" srcset=""></a></span></label>
                        <select id="idtipoobra" name="idtipoobra" class="form-control">
                            <option value="">Entre com Tipo</option>
                                <?php while($listaTipo = mysqli_fetch_array($listaTipoSql)){ ?>
                            <option value="<?php echo $listaTipo[0];?>" ><?php echo $listaTipo[1];?></option>

                            <?php } ?>
                        </select>
                    </div>
        </form>
                    <?php 
                    $mediunico = "Médiunico";
                    while($Mostrar = mysqli_fetch_array($listaTipoSql)){
                    var_dump($Mostrar);
                    
                                }?>
                
                </div>
                <!-- Fim terceiro bloco -->
            </div>
            <div class=" text-right mr-2 mb-2">
                <button class="btn btn-info" type="submit" name="btncadastrar">Cadastrar</button>
                <a class="btn btn-info" href="listarTitulos.php">Listar</a>
            </div>

        <legend class="text-center bg-info text-white">
            <span class="d-inline-block p-2 small">Você está no Sistema de Cadastro de Titulos -&nbsp<?php include ('../../../Includes/boasvindas.php'); ?>&nbspEstamos em:&nbsp<?php echo date('d/m/Y') ?></span>
        </legend>
    </div>
    <script src="../../../js/jquery/jquery-3.5.1.min.js"></script>
</body>
</html>