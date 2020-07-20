<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include "../../../conexao/conexao.php" ?>
	<?php  ini_set('default_charset','UTF-8'); ?>
	<title>Ordenando as Palestras</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="../../../includes/bootstrap/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	
	<script>
	$(function() {
		$("#calendario").datepicker({
			dateFormat: 'yy/mm/dd',
			dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
			dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
			dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
			monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
			monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
			showOn: "button",
			buttonImage: "calendario.png",
			buttonImageOnly:true
		});
	});
	</script>
</head>
<body onload="document.palestra.palestrante.focus();">
	<!--Inicio da recuperação de valores na tabela -->
	<?php
	$id = $_GET['IdPalestra'];
	/*$dt = $_GET['dataPalestra'];
	$palestrante = $_GET['palestrante'];
	$tema = $_GET['temaPalestra'];
	$diretor = $_GET['diretorPalestra'];
	$semana = $_GET['semana']['quarta'];
	$semana = $_GET['semana']['domingo'];
*/
	$sql_update = mysqli_query($conn, "SELECT * from `palestra` where IdPalestra=$id") or die("mysql error:" . mysqli_error($conn)."<hr><br>Query: $sql_update");

	while($dados = mysqli_fetch_array($sql_update)){
		$vid = 	$dados['IdPalestra'];
		$dataPalestra = $dados['DataPalestra'];
		$palestrante = $dados['Palestrante'];
		$temaPalestra = $dados['TemaPalestra'];
		$diretor = $dados['DiretorPalestra'];
		$semana = $dados['Semana'];

	}

	?>
	<!-- Fim da recuperação-->
	<section class="container">
		<form id="form-group" action="salvar.php"  method="GET" name="palestra">
			<legend class="text-center">Atualizando Palestras Públicas</legend>
			<input class="form-control" type="hidden" name="IdPalestra" value="<?php echo $vid ;?>">
			<label for="DataPalestra">Data</label>
			<input class="form-control" type="date" name="DataPalestra" value="<?php echo $dataPalestra ;?>" />
			<label for="Palestrante">Palestrante/Orador</label>
			<input class="form-control" type="text" name="Palestrante" value="<?php echo $palestrante ;?>" />
			<label for="TemaPalestra">Tema da Palestra</label>
			<input class="form-control" type="text" name="TemaPalestra" value="<?php echo $temaPalestra ;?>"/>
			<label for="DiretorPalestra">Diretor Reunião</label>
			<input class="form-control" type="text" name="DiretorPalestra" value="<?php echo $diretor ;?>"/>
			<label for="Semana">Semana</label>
			<select class="form-control" type="text" name="Semana" value="<?php echo $semana ;?>">
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
