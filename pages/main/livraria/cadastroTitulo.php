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
    <link rel="stylesheet" href="../../../css/styleMostrar.css">
    <script src="../../../js/jquery/jquery-3.5.1.min.js"></script> 
    <script src="../../../js/mostrarJavascrip.js"></script>
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
                <div class="col-md-4 bd-highlight">
                    <div class="form-group">
                        <label class="mb-0 p-0" for="idtipoobra">Tipo da Obra &nbsp &nbsp<span><a href="#"><img src="cadastro.png" alt="" srcset=""></a></span></label>
                        <select id="mostraTipoobra" name="mostraTipoobra" class="form-control">
                            <option value="">Entre com Tipo</option>
                                <?php while($listaTipo = mysqli_fetch_array($listaTipoSql)){ ?>
                            <option value="<?php echo $listaTipo[0];?>" ><?php echo $listaTipo[1];?></option>
                                <?php } ?>
                        </select>
                    </div>
                    <div id="mostrar">
                        <div id="2">
                            <span class="form-group" id='1'>
                                <label class="mb-0 p-0" for="idpesquisador">Pesquisador &nbsp &nbsp<span><a href="#"><img src="cadastro.png" alt="" srcset=""></a></span></label>
                                <select name="idpesquisador" id="idpesquisador" class="form-control">
                                    <option value="">Entre com o Pesquisador</option> 
                                    <?php while($listanaomediunico = mysqli_fetch_array($naomediunicoSql)){ ?>
                                        <option value="<?php echo $listanaomediunico[1];//captura idtipoobra?>"><?php echo utf8_encode($listanaomediunico[4]);?></option>    
                                        <?php } ?>
                                </select>
                            </span>
                        </div>
                        <div id="1">
                            <span class="form-group">
                                <label class="mb-0 p-0" for="idpsicografo">Psicógrafo &nbsp &nbsp<span><a href="#"><img src="cadastro.png" alt="" srcset=""></a></span></label>
                                <select name="idpsicografo" id="idpsicografo" class="form-control">
                                    <option value="">Entre com o Psicógrafo</option>
                                    <?php while($listamediunica = mysqli_fetch_array($mediunicaSql)){ ?>
                                    <option value="<?php echo $listamediunica[1];//captura idtipoobra?>" ><?php echo $listamediunica[4];?></option>    
                                    <?php } ?>
                                </select>
                            </span>
                            <span class="form-group mediunica">
                                <label class="mb-0 p-0" for="idautorEspiritual">Espírito Autor &nbsp &nbsp<span><a href="#"><img src="cadastro.png" alt="" srcset=""></a></span></label>
                                <select name="idautorEspiritual" id="idautorEspiritual" class="form-control">
                                    <option value="">Entre com o Espírito Autor</option>
                                    <?php while($listaAut = mysqli_fetch_array($listaAutSql)){ ?>
                                    <option value="<?php echo $listaAut[0];?>"><?php echo $listaAut[1];?></option>    
                                    <?php }  ?>
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
        <div class=" text-right mr-2 mb-2">
            <button class="btn btn-info" type="submit" name="btncadastrar">Cadastrar</button>
            <a class="btn btn-info" href="listarTitulos.php">Listar</a>
        </div>

        <legend class="text-center bg-info text-white">
            <span class="d-inline-block p-2 small">Você está no Sistema de Cadastro de Titulos -&nbsp<?php include ('../../../Includes/boasvindas.php'); ?>&nbspEstamos em:&nbsp<?php echo date('d/m/Y') ?></span>
        </legend>
    </div>
</body>
</html>