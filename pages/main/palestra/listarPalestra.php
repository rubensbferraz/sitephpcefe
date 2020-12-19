<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">

<head>
	<?php include "../../../Config/conexao.php" ?>
	<title>Ordenando as Palestras</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="../../../includes/bootstrap/css/bootstrap.min.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>

<body>
		<?php

		$mes = date('m');
		$my = date('M-Y');
		$sqlBuscaSex = mysqli_query($conn, "SELECT * FROM tb_palestra where semanaPalestra='sexta'");
		$sqlBuscaDom = mysqli_query($conn, "SELECT * FROM tb_palestra where semanaPalestra='domingo'");
		//$linha = $sqlBusca->num_rows;
		$Monta = array('sexta', 'domingo');

		?>
	<section id="lista">
		<!-- Lista palestra de Sexta Feira -->
		<h4 class="container mt-4 text-center">Escala de Oradores para o mês "<?php echo $my; ?>"<p class="text-uppercase text-monospace"><?php echo strtoupper($Monta[0]); ?></p>
		</h4>
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

			while ($dados = mysqli_fetch_array($sqlBuscaSex)) {
				$vid = 	$dados['idPalestra'];
				$dataPalestra = $dados['dataPalestra'];
				$dt = explode("-", $dataPalestra);
				$orador = $dados['oradorPalestra'];
				$temaPalestra = $dados['temaPalestra'];
				$diretor = $dados['diretorPalestra'];
				$semana = $dados['semanaPalestra'];
				if ($mes == $dt[1]) {

				?>
						<tbody>
							<tr>
								<td><?php echo $dataPalestra; ?></td>
								<td><?php echo $orador; ?></td>
								<td charset="utf8"><?php echo $temaPalestra; ?></td>
								<td><?php echo $diretor; ?></td>
								<td><button class="btn btn-btn-sucess" name="atualizar" ?><a href="alterarPalestra.php?<?php echo 'idPalestra'; ?>=<?php echo $vid; ?>">Atualizar</a> </button></td>
							</tr>
						</tbody>

				<?php
				}
			}
			?>
		</table>	
	</section>
	<section>
		<!-- Lista palestra de Domingo -->
		<h4 class="container mt-4 text-center">Escala de Oradores para o mês "<?php echo $my; ?>"<p class="text-uppercase text-monospace"><?php echo strtoupper($Monta[1]); ?></p>
		</h4>
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

			while ($dados = mysqli_fetch_array($sqlBuscaDom)) {
				$vidSex = 	$dados['idPalestra'];
				$dataSex = $dados['dataPalestra'];
				$dtSex = explode("-", $dataSex);
				$oradorSex = $dados['oradorPalestra'];
				$temaSex = $dados['temaPalestra'];
				$diretorSex = $dados['diretorPalestra'];
				$semana = $dados['semanaPalestra'];

				if ($mes == $dtSex[1]) {

				?>
						<tbody>
							<tr>
								<td><?php echo $dataSex; ?></td>
								<td><?php echo $oradorSex; ?></td>
								<td charset="utf8"><?php echo $temaSex; ?></td>
								<td><?php echo $diretorSex; ?></td>
								<td><button class="btn btn-btn-sucess" name="atualizar" ?><a href="alterarPalestra.php?<?php echo 'idPalestra'; ?>=<?php echo $vidSex; ?>">Atualizar</a> </button></td>
							</tr>
						</tbody>

				<?php
					}
			}
			?>
		</table>
	</section>
	<script src="../../../includes/bootstrap/js/jquery-3.5.1.min.js"></script>
	<script src="../../../includes/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>