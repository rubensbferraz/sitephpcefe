<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php 
        include "../../../Config/conexao.php" ;
        include "../../../Config/config.php" ;
        include "querys.php";
    ?>
    
	<?php ini_set('default_charset', 'UTF-8'); ?>
	<title>Alterando Títulos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../../Includes/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../../css/livraria.css">
    <link rel="stylesheet" href="../../../css/navegacao.css">
    <link rel="stylesheet" href="../../../css/styleMostrar.css">
    <script src="../../../js/jquery/jquery-3.5.1.min.js"></script> 
    <script src="../../../js/mostrarJavascrip.js"></script>
</head>

<body onload="document.titulo.titulo.focus();">
    <nav aria-label="breadcrumbs">
        <ol class="breadcrumbs">
            <li class="breadcrumbs-item &rang"><a href="<?PHP echo DIRPAGE ."index.php" ?>">Home</a></li>
            <li class="breadcrumbs-item &rang"><a href="<?PHP echo "cadastroTitulo.php" ?>">Cadastro de Títulos</a></li>
            <li class="breadcrumbs-item &rang"><a href="<?PHP echo "listarTitulos.php" ?>">Listar Títulos</a></li>
            <li class="breadcrumbs-item &rang active" aria-current="page">Lista de Títulos</li>
        </ol>
    </nav>
	<!--Inicio da recuperação de valores na tabela -->
	<?php
	$id = $_GET['id']; //echo $id;
	$sqlUpdadeTitulo = mysqli_query($conn, "SELECT t.id, t.titulo, t.descricao, t.edicao, t.dtPublicacao, t.isbn, t.preco, t.id_editora, t.id_tipoobra, 
    edi.id, edi.editora, tipo.id, tipo.tipoObra from tb_titulo t inner join tb_editora edi on t.id_editora=edi.id inner join tb_tipoobra tipo on t.id_tipoobra=tipo.id where t.id=$id  ") or die("mysql error:" . mysqli_error($conn) . "<hr><br>Query: $sqlUpdadeTitulo");
    $med = 1;
    $pesq = 2;
	while ($dados = mysqli_fetch_array($sqlUpdadeTitulo)) {
		$vid = 	$dados['id'];
		$titulo = $dados['titulo'];
        $descricao = $dados['descricao'];
        $publicacao = $dados['dtPublicacao'];
        $edicao = $dados['edicao'];
        $isbn = $dados['isbn'];
        $preco = $dados['preco'];
        $ideditora = $dados['id_editora'];
        $idTipoobra = $dados['id_tipoobra'];
        $tipoObra = $dados['tipoObra'];
        $editora = $dados['editora'];
    }

    $sqlUpdadeNaoMediunico = mysqli_query($conn, "SELECT pesq.id, pesq.pesquisador, tipo.tipoObra from tb_pesquisador pesq inner join tb_naomediunico nm on pesq.id=nm.id_pesquisador inner join tb_tipoobra tipo on tipo.id=nm.id_tipoobra") or die("Mysql error" . mysqli_error($conn). "<hr><br>Query: $sqlUpdadeNaoMediunico");
	while ($dadosNM = mysqli_fetch_array($sqlUpdadeNaoMediunico)) {
		$vid = 	$dadosNM['id'];
        $pesquisador = $dadosNM['pesquisador'];
        $tipoObraNm = $dadosNM['tipoObra'];//var_dump($dadosNM[2]);
    }
    $sqlUpdadeMediunico = mysqli_query($conn, "SELECT  psi.id, psi.psicografo, tipo.tipoObra from tb_psicografo psi inner join tb_mediunica m on psi.id=m.id_psicografo inner join tb_tipoobra tipo on tipo.id=m.id_tipoobra") or die("Mysql error" . mysqli_error($conn). "<hr><br>Query: $sqlUpdadeMediunico");
    while ($dadosMe = mysqli_fetch_array($sqlUpdadeMediunico)) {
		$vid = 	$dadosMe['id'];
        $psicografoMe = $dadosMe['psicografo']; //var_dump($dadosMe[2]);
        $tipoObraMe = $dadosMe['tipoObra'];
    }

    $sqlUpdadeAutorEspiritual = mysqli_query($conn, "SELECT aut.id, psi.psicografo, aut.espiritoAutor from tb_autorespiritual aut inner join tb_psicografo psi on psi.id=aut.id_psicografo") or die("Mysql error" . mysqli_error($conn). "<hr><br>Query: $sqlUpdadeAutorEspiritual");
    while ($dadosAut = mysqli_fetch_array($sqlUpdadeAutorEspiritual)) {
		$vid = 	$dadosAut['id'];
        $psicografoAUt = $dadosAut['psicografo'];
        $espiritoAutor = $dadosAut['espiritoAutor'];
    }
	?>
	<!-- Fim da recuperação-->
	<section class="container">
		<form id="form-group" action="salvar.php" method="GET">
			<legend class="text-center">Atualizando Título</legend>
			<input class="form-control" type="hidden" name="id" value="<?php echo $vid; ?>">
			<label for="titulo">Título</label>
			<input class="form-control" type="text" name="titulo" value="<?php echo $titulo; ?>"/>
			<label for="descricao">Descrição</label>
			<input class="form-control" type="text" name="descricao" value="<?php echo $descricao; ?>"/>
			<label for="edicao">Edição</label>
			<input class="form-control" type="text" name="dtPublicacao" value="<?php echo $publicacao; ?>"/>
			<label for="isbn">Edição</label>
			<input class="form-control" type="text" name="edicao" value="<?php echo $edicao; ?>"/>
            <label for="isbn">ISBN</label>
			<input class="form-control" type="text" name="isbn" value="<?php echo $isbn; ?>"/>
            <label for="preco">preco</label>
            <input class="form-control" type="text" name="preco" value="<?php echo $preco; ?>"/>
            <hr/>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Editora</th>
                        <th scope="col">Id</th>
                        <th scope="col">Tipo da Obra</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input class="form-control" type="text" style="width: 45px;" name="id_editora" value="<?php echo $ideditora; ?>"/>
                        </td>
                        <td><input class="form-control" type="text" style="width: 350px;" nome="editora" value="<?php echo $editora; ?>" >
                        </td>
                        <td>
                            <input class="form-control" type="text" style="width: 45px;" name="id_tipoobra" value="<?php echo $idTipoobra; ?>"/>
                        </td>
                        <td>
                            <input class="form-control" type="text" style="width: 350px;" name="tipoObra" value="<?php echo $tipoObra; ?>"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="botaoAtualizar">
                <button class="btn btn-success my-3" type="submit" name="atualizar" value="atualizar">Atualizar</button>
                <label></label>
            </p>
            <hr/>
            <hr/>
            <?php if($idTipoobra=='1'){ ?>
                <label>SE FOR NECESSÁRIO ALTERAR O TIPO DA OBRA - Mediúnico</label>
                <input class="form-control" type="text" name="id_tipoobra" value="<?php echo $tipoObraMe; ?>"/><br/>
                <select id="mostraTipoobra" name="id_tipoobra" class="form-control">
                    <option value="">Selecione o Tipo da Obra para atualizar</option>
                        <?php while($listaTipo = mysqli_fetch_array($listaTipoSql)){ ?>
                    <option value="<?php echo $listaTipo[0];?>" ><?php echo $listaTipo[1];?></option>
                        <?php } ?>
                </select>
            <?php }
                if($idTipoobra=='2') { ?>
                <label>SE FOR NECESSÁRIO ALTERAR O TIPO DA OBRA - Pesquisa</label>
                <input class="form-control" type="text" name="id_tipoobra" value="<?php echo $tipoObraNm; ?>"/><br/>
                <select id="mostraTipoobra" name="id_tipoobra" class="form-control">
                    <option value="">Selecione o Tipo da Obra para atualizar</option>
                        <?php while($listaTipo = mysqli_fetch_array($listaTipoSql)){ ?>
                    <option value="<?php echo $listaTipo[0];?>" ><?php echo $listaTipo[1];?></option>
                        <?php } ?>
                </select>
            <?php   } ?>
            <hr/>
            <hr/>
        </form>
        <form action="salvarSegunda.php" method="get">
            <div id="mostrar">
                <div id="1"><!-- para alterar o Tipo da Obra Mediúnico -->
                    <span class="form-group">
                        <label class="mb-0 p-0" for="id_editora">Editora &nbsp &nbsp</label>
                        <select name="id_editora" class="form-control" id="id_editora">
                            <option value="">Entre com a Editora</option>
                                <?php while($listaEd = mysqli_fetch_array($listaEdSql)){ ?>
                            <option value="<?php echo $listaEd[0];?>" ><?php echo $listaEd[1];?></option>
                                <?php }?>
                        </select>
                    </span>
                    <span class="form-group">
                        <label class="mb-0 p-0" for="idpsicografo">Psicógrafo &nbsp &nbsp</label>
                        <select name="psicografo" id="idpsicografo" class="form-control">
                            <option value="">Entre com o Psicógrafo</option>
                            <?php while($listamediunica = mysqli_fetch_array($mediunicaSql)){ ?>
                            <option value="<?php echo $listamediunica[1];//captura idtipoobra?>" ><?php echo $listamediunica[4];?></option>    
                            <?php } ?>
                        </select>
                    </span>
                    <span class="form-group mediunica">
                        <label class="mb-0 p-0" for="idautorEspiritual">Espírito Autor &nbsp &nbsp</label>
                        <select name="espiritoAutor" id="idautorEspiritual" class="form-control">
                            <option value="">Entre com o Espírito Autor</option>
                            <?php while($listaAut = mysqli_fetch_array($listaAutSql)){ ?>
                            <option value="<?php echo $listaAut[0];?>"><?php echo $listaAut[1];?></option>    
                            <?php }  ?>
                        </select>
                    </span>
                </div>
                <div id="2"><!-- para alterar o Tipo da Obra Pesquisa -->
                    <span class="form-group">
                        <label class="mb-0 p-0" for="id_editora">Editora &nbsp &nbsp</label>
                        <select name="id_editora" class="form-control" id="id_editora">
                            <option value="">Entre com a Editora</option>
                                <?php while($listaEd = mysqli_fetch_array($listaEdSql)){ ?>
                            <option value="<?php echo $listaEd[0];?>" ><?php echo $listaEd[1];?></option>
                                <?php }?>
                        </select>
                    </span>
                    <span class="form-group">
                        <label class="mb-0 p-0" for="idpesquisador">Pesquisador &nbsp &nbsp</label>
                        <select name="pesquisador" id="idpesquisador" class="form-control">
                            <option value="">Entre com o Pesquisador</option>
                            <?php while($listanaomediunico = mysqli_fetch_array($naomediunicoSql)){ ?>
                                <option value="<?php echo $listanaomediunico[1];//captura idtipoobra?>"><?php echo utf8_encode($listanaomediunico[4]);?></option>    
                                <?php } ?>
                        </select>
                    </span>
                </div>
            </div>
        </form>
	</section>
	<?php
	mysqli_close($conn);
	?>

</body>

</html>