<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <?php include "../../../Config/conexao.php" ?>
    <?php include "../../../Config/config.php" ?>
	<title>Lista de Tìtulos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../includes/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../../../css/livraria.css">
    <link rel="stylesheet" href="../../../css/navegacao.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>

<body>
    <nav aria-label="breadcrumbs">
        <ol class="breadcrumbs">
            <li class="breadcrumbs-item &rang"><a href="<?PHP echo DIRPAGE ."index.php" ?>">Home</a></li>
            <li class="breadcrumbs-item &rang"><a href="<?PHP echo "cadastroTitulo.php" ?>">Cadastro de Títulos</a></li>
            <li class="breadcrumbs-item &rang active" aria-current="page">Lista de Títulos</li>
        </ol>
    </nav>
		<?php
        $sqlBuscaTitulosM = mysqli_query($conn, "SELECT t.id, t.titulo, t.descricao, t.edicao, t.dtPublicacao, t.isbn, t.preco, t.edicao, t.id_editora, 
        t.id_tipoobra, e.editora FROM tb_titulo t inner join tb_editora e on e.id=t.id_editora");
        $linhaM = $sqlBuscaTitulosM->num_rows;
        $sqlBuscaTitulosP = mysqli_query($conn, "SELECT t.id, t.titulo, t.descricao, t.edicao, t.dtPublicacao, t.isbn, t.preco, t.edicao, t.id_editora, 
        t.id_tipoobra, e.editora FROM tb_titulo t inner join tb_editora e on e.id=t.id_editora");
        $linhaP = $sqlBuscaTitulosP->num_rows;
		?>
	<div class="p-4">
		<!-- Lista Títulos Tipo da Obra = Médiunico -->
		<h4 class="mt-4 text-center">Lista de Títulos cadastrados como Mediúnico</h4>
		<table class="table table-bordered">
			<thead class="thead-light">
				<tr>
					<th scope="col">Título</th>
					<th scope="col">Descrição</th>
					<th scope="col">edição</th>
                    <th scope="col">Publicação</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Editora</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>
			<?php
            for ($i=0; $i < $linhaM; $i++) { 
                while ($dadosM = mysqli_fetch_array($sqlBuscaTitulosM)) {
                    $vid = 	$dadosM['id'];
                    $titulo = $dadosM['titulo'];
                    $descricao = $dadosM['descricao'];
                    $edicao = $dadosM['edicao'];
                    $publicacao = $dadosM['dtPublicacao'];
                    $isbn = $dadosM['isbn'];
                    $preco = $dadosM['preco'];
                    $ideditora = $dadosM['editora'];
                    $idtipoobra = $dadosM['id_tipoobra'];
                    if($idtipoobra == 1){
                        ?>
						<tbody>
							<tr>
								<td><?php echo $titulo; ?></td>
								<td><?php echo $descricao; ?></td>
								<td><?php echo $edicao; ?></td>
                                <td><?php echo $publicacao; ?></td>
                                <td><?php echo $isbn; ?></td>
                                <td><?php echo $preco; ?></td>
                                <td><?php echo $ideditora; ?></td>
								<td><button class="btn btn-btn-sucess" name="atualizar" ?><a href="alterarTitulo.php?<?php echo 'id'; ?>=<?php echo $vid; ?>">Atualizar</a> </button></td>
							</tr>
						</tbody>

                     <?php
                    }
                }
            }
                ?>
        </table>
    </div>
    <div class="p-4">
        <!-- Lista Títulos Tipo da Obra = Pesquisa -->
		<h4 class=" mt-4 text-center">Lista de Títulos cadastrados como pesquisa</h4>
            <table class="table table-bordered p-2">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">edição</th>
                        <th scope="col">Publicação</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Editora</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <?php
                for ($i=0; $i < $linhaP; $i++) { 
                    while ($dadosP = mysqli_fetch_array($sqlBuscaTitulosP)) {
                        $vid = 	$dadosP['id'];
                        $titulo = $dadosP['titulo'];
                        $descricao = $dadosP['descricao'];
                        $edicao = $dadosP['edicao'];
                        $publicacao = $dadosP['dtPublicacao'];
                        $isbn = $dadosP['isbn'];
                        $preco = $dadosP['preco'];
                        $ideditora = $dadosP['editora'];
                        $idtipoobra = $dadosP['id_tipoobra'];
                        if($idtipoobra == 2){
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $titulo; ?></td>
                                    <td><?php echo $descricao; ?></td>
                                    <td><?php echo $edicao; ?></td>
                                    <td><?php echo $publicacao; ?></td>
                                    <td><?php echo $isbn; ?></td>
                                    <td><?php echo $preco; ?></td>
                                    <td><?php echo $ideditora; ?></td>
                                    <td><button class="btn btn-btn-sucess" name="atualizar" ?><a href="alterarTitulo.php?<?php echo 'id'; ?>=<?php echo $vid; ?>">Atualizar</a> </button></td>
                                </tr>
                            </tbody>
                        <?php
                        }
                    }
                }

			    ?>
		    </table>	
    </div>

	<script src="../../../includes/bootstrap/js/jquery-3.5.1.min.js"></script>
	<script src="../../../includes/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>