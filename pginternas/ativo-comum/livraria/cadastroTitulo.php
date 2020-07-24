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
        <form class="container" action="gravarTitulo.php" method="POST" name="tb_titulos">
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
                    <label class="mb-0 p-0" for="dtPublicacao">Publicação</label>
                    <input class="form-control" type="date" name="dtPublicacao">
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
                    <input class="dinheiro form-control" type="text" name="preco">
                </div>
            </div>
            <!-- Fim segundo bloco -->
            <div class="col-md-4 bd-highlight">
                <div class="form-group">
                    <label class="mb-0 p-0" for="ideditora">Editora &nbsp &nbsp<span><a href="#"><img src="cadastro.png" alt="" srcset=""></a></span></label>
                    <select name="ideditora" class="form-control" id="ideditora">
                        <option value="">Entre com a Editora</option>
                    <?php while($listaEd = mysqli_fetch_array($listaEdSql)){ ?>
                        <option value="<?php echo $listaEd[0];?>" ><?php echo utf8_encode($listaEd[1]);?></option>
                    <?php }?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="mb-0 p-0" for="idpesquisador">Pesquisador &nbsp &nbsp<span><a href="#"><img src="cadastro.png" alt="" srcset=""></a></span></label>
                    <select name="idpesquisador" id="idpesquisador" class="form-control">
                        <option value="">Entre com o Pesquisador</option>
                        <?php while($listaPesq = mysqli_fetch_array($listaPesqSql)){ ?>
                        <option value="<?php echo $listaPesq[0];?>"><?php echo utf8_encode($listaPesq[1]);?></option>    
                        <?php } ?>
                    </select>
                </div> 
                <div class="form-group">
                    <label class="mb-0 p-0" for="idpsicografo">Psicógrafo &nbsp &nbsp<span><a href="#"><img src="cadastro.png" alt="" srcset=""></a></span></label>
                    <select name="idpsicografo" id="idpsicografo" class="form-control">
                        <option value="">Entre com o Psicógrafo</option>
                        <?php while($listaPsi = mysqli_fetch_array($listaPsiSql)){ ?>
                        <option value="<?php echo $listaPsi[0];?>"><?php echo utf8_encode($listaPsi[1]);?></option>    
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="mb-0 p-0" for="idautorEspiritual">Espírito Autor &nbsp &nbsp<span><a href="#"><img src="cadastro.png" alt="" srcset=""></a></span></label>
                    <select name="idautorEspiritual" id="idautorEspiritual" class="form-control">
                        <option value="">Entre com o Espírito Autor</option>
                        <?php while($listaAut = mysqli_fetch_array($listaAutSql)){ ?>
                        <option value="<?php echo $listaAut[0];?>"><?php echo utf8_encode($listaAut[1]);?></option>    
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