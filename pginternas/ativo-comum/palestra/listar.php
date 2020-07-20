<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<?php include "../../../conexao/conexao.php" ?>
	<title>Ordenando as Palestras</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="../../../includes/bootstrap/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="../../../includes/bootstrap/css/bootstrap-responsive.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script type="text/javascript" sr="js/libs/angular.min.js"></script>
	<script type="text/javascript" sr="js/libs/angular-ui-router.min.js"></script>

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
<body >
	<section id="lista">
		<?php

		$mes = date('m');
		$sqlBusca = mysqli_query($conn, "SELECT * FROM `palestra` ");
		$linha = $sqlBusca->num_rows;
		$Monta1 = 'domingo';
		
		?>
		
		<h4 class="container mt-4 text-center">Escala de Oradores para o mês "<?php $my=date('M-Y'); echo $my; ?>"<p class="text-uppercase text-monospace"><?php echo strtoupper($Monta1); ?></p></h4>
			<table class="table table-bordered container">
				<thead class="thead-light">
					<tr>
						<th scope="col">Data</th>
						<th scope="col">Palestrante Orador</th>
						<th scope="col">Tema</th>
						<th scope="col">Diretor</th>
						<th scope="col">Ação</th>
					</tr>
				</thead>
				<?php

				while($dados = mysqli_fetch_array($sqlBusca)){
					$vid = 	$dados['IdPalestra'];
					$dataPalestra = $dados['DataPalestra'];
					$dt = explode("-", $dataPalestra);
					$palestrante = $dados['Palestrante'];
					$temaPalestra = $dados['TemaPalestra'];
					$diretor = $dados['DiretorPalestra'];
					$semana = $dados['Semana'];					
					if($mes==$dt[1] & $semana==$Monta1){
						
						?>
				<tbody>
					<tr>
						<td><?php echo $dataPalestra;?></td>
						<td><?php echo utf8_decode($palestrante);?></td>
						<td charset="utf8"><?php echo utf8_decode($temaPalestra);?></td>
						<td><?php echo utf8_decode($diretor);?></td>
						<td><button class="btn btn-btn-sucess" name="atualizar"?><a href="alterarPalestra.php?<?php echo 'IdPalestra';?>=<?php echo $vid;?>">Atualizar</a> </button></td>
					</tr>
				</tbody>

						<?php
					}
				}
				?>
			</table>
			<!-- Lista palestra de Sexta Feira -->
			<?php

				$mes = date('m');
				$sqlBusca = mysqli_query($conn, "SELECT * FROM `palestra` ");
				$linha = $sqlBusca->num_rows;
				$Monta2 = 'sexta';
				
			?>
			<h4 class="container mt-4 text-center">Escala de Oradores para o mês "<?php $my=date('M-y'); echo $my; ?>"<p class="text-uppercase text-monospace"><?php echo strtoupper($Monta2); ?></p></h4>
			<table class="table table-bordered container">
				<thead class="thead-light">
					<tr>
						<th scope="col">Data</th>
						<th scope="col">Palestrante Orador</th>
						<th scope="col">Tema</th>
						<th scope="col">Diretor</th>
						<th scope="col">Ação</th>
					</tr>
				</thead>
				<?php

				while($dados = mysqli_fetch_array($sqlBusca)){
					$vid = 	$dados['IdPalestra'];
					$dataPalestra = $dados['DataPalestra'];
					$dt = explode("-", $dataPalestra);
					$palestrante = $dados['Palestrante'];
					$temaPalestra = $dados['TemaPalestra'];
					$diretor = $dados['DiretorPalestra'];
					$semana = $dados['Semana'];
									
					if($mes==$dt[1] & $semana==$Monta2){
				
						?>
				<tbody>
					<tr>
						<td><?php echo $dataPalestra;?></td>
						<td><?php echo utf8_decode($palestrante);?></td>
						<td charset="utf8"><?php echo utf8_decode($temaPalestra);?></td>
						<td><?php echo utf8_decode($diretor);?></td>
						<td><button class="btn btn-btn-sucess" name="atualizar"?><a href="alterarPalestra.php?<?php echo 'IdPalestra';?>=<?php echo $vid;?>">Atualizar</a> </button></td>
					</tr>
				</tbody>

						<?php
					}
				}
				?>
			</table>
	</section>
	<script src="../../../includes/bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../../../includes/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
