<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<?php
	include("../../../config/conexao.php");
	include("Breadcrumb.php");
	?>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../../includes/bootstrap/css/bootstrap.min.css" type="text/css">
	<title>Cadastrando Palestras</title>

</head>

<body>
	<section class="container">
		<form class="form-group" action="cadastroPalestra.php" method="POST">
			<div class="row">
				<legend>Ordenando Escala de Palestras Públicas</legend>
				<img src="" alt="" srcset="">
				<div class="col-6">
					<label for="dataPalestra">Data</label>
					<input class="form-control" type="date" name="dataPalestra" />
				</div>
				<div class="col-6">
					<label for="oradorPalestra">Palestrante/Orador</label>
					<input class="form-control" type="text" name="oradorPalestra" />
				</div>
				<div class="col-6">
					<label for="temaPalestra">Tema da Palestra</label>
					<input class="form-control" type="text" name="temaPalestra" />
				</div>
				<div class="col-6">
					<label for="diretorPalestra">Diretor Reunião</label>
					<input class="form-control" type="text" name="diretorPalestra" />
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<label>Escolha a Semana</label>
					<select class="form-control" type="text" name="semanaPalestra">
						<option value="sexta">Sexta</option>
						<option value="domingo">Domingo</option>
					</select>
				</div>
			</div>
			<div class="col-12 my-4 text-center">
				<button class="btn btn-success float-right" type="submit" name="cadastrar">Cadastrar</button>
			</div>
		</form>
	</section>
	<section id="folha" class="container">
	<?php include ("listarPalestra.php"); ?>
	</section>
	<script src="../../../includes/bootstrap/js/jquery-3.5.1.min.js"></script>
</body>

</html>