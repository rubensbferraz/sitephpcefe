<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php include "../../../Config/conexao.php" ?>
	<?php include "../../../Config/config.php" ?>
	<?php ini_set('default_charset', 'UTF-8'); ?>
	<title>Ordenando as Palestras</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="../../../Includes/bootstrap/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="../../../css/palestra.css">
	<link rel="stylesheet" href="../../../css/navegacao.css">

	<script>
		$(function() {
			$("#calendario").datepicker({
				dateFormat: 'yy/mm/dd',
				dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
				dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
				dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
				monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
				monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
				showOn: "button",
				buttonImage: "calendario.png",
				buttonImageOnly: true
			});
		});
	</script>
</head>

<body onload="document.palestra.palestrante.focus();">
	<nav aria-label="breadcrumbs">
		<ol class="breadcrumbs">
			<li class="breadcrumbs-item &rang"><a href="<?PHP echo DIRPAGE ."index.php" ?>">Home</a></li>
			<li class="breadcrumbs-item &rang"><a href="<?PHP echo "palestra.php" ?>">Cadastro de Palestra</a></li>
			<li class="breadcrumbs-item &rang active" aria-current="page">Alterar Palestra</li>
		</ol>
	</nav>
	<!--Inicio da recuperação de valores na tabela -->
	<?php
	$id = $_GET['idPalestra'];
	/*$dt = $_GET['dataPalestra'];
	$palestrante = $_GET['palestrante'];
	$tema = $_GET['temaPalestra'];
	$diretor = $_GET['diretorPalestra'];
	$semana = $_GET['semana']['quarta'];
	$semana = $_GET['semana']['domingo'];
*/
	$sql_update = mysqli_query($conn, "SELECT * from tb_palestra where idPalestra=$id") or die("mysql error:" . mysqli_error($conn) . "<hr><br>Query: $sql_update");

	while ($dados = mysqli_fetch_array($sql_update)) {
		$vid = 	$dados['idPalestra'];
		$dataPalestra = $dados['dataPalestra'];
		$palestrante = $dados['oradorPalestra'];
		$temaPalestra = $dados['temaPalestra'];
		$diretor = $dados['diretorPalestra'];
		$semana = $dados['semanaPalestra'];
	}

	?>
	<!-- Fim da recuperação-->
	<section class="container">
		<form id="form-group" action="salvar.php" method="GET" name="palestra">
			<legend class="text-center">Atualizando Palestras Públicas</legend>
			<input class="form-control" type="hidden" name="idPalestra" value="<?php echo $vid; ?>">
			<label for="DataPalestra">Data</label>
			<input class="form-control" type="date" name="dataPalestra" value="<?php echo $dataPalestra; ?>" />
			<label for="Palestrante">Palestrante/Orador</label>
			<input class="form-control" type="text" name="oradorPalestra" value="<?php echo $palestrante; ?>" />
			<label for="TemaPalestra">Tema da Palestra</label>
			<input class="form-control" type="text" name="temaPalestra" value="<?php echo $temaPalestra; ?>" />
			<label for="DiretorPalestra">Diretor Reunião</label>
			<input class="form-control" type="text" name="diretorPalestra" value="<?php echo $diretor; ?>" />
			<label for="Semana">Semana</label>
			<select class="form-control" type="text" name="semanaPalestra" value="<?php echo $semana; ?>">
				<option value="<?php echo $semana ?>">domingo</option>
				<option value="<?php echo $semana ?>">quarta</option>
			</select>
			<p>
				<button class="btn btn-success my-3" type="submit" name="atualizar" value="atualizar">Atualizar</button>
				<label></label>
			</p>
		</form>
	</section>

	<?php
	mysqli_close($conn);
	?>

</body>

</html>