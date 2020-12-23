<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Includes/bootstrap/css/bootstrap.min.css" type="text/css">
    <script src="../../../js/jquery/jquery-3.5.1.min.js"></script> 
    <script src="mostrarJavascrip.js"></script>
    <link rel="stylesheet" href="styleMostrar.css">
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
        <legend class="text-center bg-info text-white">Cadastrando Títulos</legend>
        <form class="container" action="" method="POST" name="tb_teste2">
            <div class="row">
                <div class="col-md-4 bd-highlight">
                    <div class="form-group">
                        <label class="mb-0 p-0">Atuando Teste &nbsp &nbsp<span><a href="#"><img src="cadastro.png"></a></span></label>
                        <select name="select" id="select" class="form-control" >
                            <option value="">Entre com o Texto frutas</option>
                            <?php while($mostrar = mysqli_fetch_array($listaTipoSql)){ ?>
                            <option value="<?php echo $mostrar[0];?>"><?php echo $mostrar[1];?></option>    
                            <?php } ?>
                        </select>
                    </div>
                    <div id="mostraTipoObra"> 
                        <div class="form-group" value='1'>
                            <label class="mb-0 p-0" for="idpesquisador">Pesquisador &nbsp &nbsp<span><a href="#"><img src="cadastro.png" alt="" srcset=""></a></span></label>
                            <select name="idpesquisador" id="idpesquisador" class="form-control">
                                <option value="">Entre com o Pesquisador</option>
                                <?php while($listanaomediunico = mysqli_fetch_array($naomediunicoSql)){ ?>
                                    <option value="<?php echo $listanaomediunico[1];//captura idtipoobra?>"><?php echo utf8_encode($listanaomediunico[4]);?></option>    
                                    <?php } ?>
                                </select>
                        </div>
                        <div id="mostrarMediunica" value='2' >
                            <div class="form-group">
                                <label class="mb-0 p-0" for="idpsicografo">Psicógrafo &nbsp &nbsp<span><a href="#"><img src="cadastro.png" alt="" srcset=""></a></span></label>
                                <select name="idpsicografo" id="idpsicografo" class="form-control">
                                    <option value="">Entre com o Psicógrafo</option>
                                    <?php while($listamediunica = mysqli_fetch_array($mediunicaSql)){ ?>
                                    <option value="<?php echo $listamediunica[1];//captura idtipoobra?>" ><?php echo $listamediunica[4];?></option>    
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group mediunica">
                                <label class="mb-0 p-0" for="idautorEspiritual">Espírito Autor &nbsp &nbsp<span><a href="#"><img src="cadastro.png" alt="" srcset=""></a></span></label>
                                <select name="idautorEspiritual" id="idautorEspiritual" class="form-control">
                                    <option value="">Entre com o Espírito Autor</option>
                                    <?php while($listaAut = mysqli_fetch_array($listaAutSql)){ ?>
                                    <option value="<?php echo $listaAut[0];?>"><?php echo $listaAut[1];?></option>    
                                    <?php }  ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Compo de escolha -->                                        
                </div>
                <style>
                    .invisivel{display: none;}
                    .visivel{visibility: visible;}
                </style>
                <!-- Fim terceiro bloco -->
            </div>
            <div class=" text-right mr-2 mb-2">
                <button class="btn btn-info" type="submit" name="cadastrar">Cadastrar</button>
                <button class="btn btn-info" type="submit" src="listarTitulos.php" name="listar">Listar</button>
            </div>
        </form>
    </div>
</body>
</html>