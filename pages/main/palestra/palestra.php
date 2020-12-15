<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<?php
	include("../../../config/conexao.php");
	include("Breadcrumb.php");
	?>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../includes/bootstrap/css/bootstrap.css" type="text/css">
	<title>Cadastrando Palestras</title>

</head>

<body>
	<section class="container">
		<form class="form-group" action="ano.php" method="POST" name="palestra">
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
		<?php

		$sqlBusca = mysqli_query($conn, "SELECT * FROM tb_palestra WHERE 1 ") or die("mysql error:" . mysqli_error($conn) . "<hr>\nQuery: $sqlBusca");
		$linha = $sqlBusca->num_rows;

		?>

		<legend>Escala de Oradores para o mês "<?php $my = date('M-Y');
												echo $my; ?>"</legend>

		<table class="table table-striped  table-bordered table-hover table-condensad">
			<thead>
				<tr class="warning">
					<th>Data</th>
					<th>Semana</th>
					<th>Palestrante Orador</th>
					<th>Tema</th>
					<th>Diretor</th>
				</tr>
			</thead>
			<?php

			$m = date('m');

			for ($i = 0; $i < $linha; $i++) {
				$escalaMes = mysqli_fetch_array($sqlBusca);
				$vid = $escalaMes['idPalestra'];
				$dataPalestra = $escalaMes['dataPalestra'];
				$diretorPalestra = utf8_encode($escalaMes['diretorPalestra']);
				$oradorPalestra = utf8_encode($escalaMes['oradorPalestra']);
				$temaPalestra = utf8_encode($escalaMes['temaPalestra']);
				$mm = explode("-", $dataPalestra);
				$atual = $mm[1];

				if ($m == $atual) {
			?>
					<tbody>
						<tr>
							<td><?php echo $dataPalestra; ?></td>
							<td><?php echo $escalaMes['semanaPalestra']; ?></td>
							<td><?php echo utf8_decode($oradorPalestra); ?></td>
							<td><?php echo utf8_decode($temaPalestra); ?></td>
							<td><?php echo utf8_decode($diretorPalestra); ?></td>
					<?php
				}
			}
					?>
						</tr>
					</tbody>
		</table>
		<form action="listar.php">
			<button class="btn btn-success btn-lg float-right" type="submit">Clique para Atualizar</button>
		</form>
	</section>
	<script src="../../../includes/bootstrap/js/jquery-3.5.1.min.js"></script>
</body>

</html>