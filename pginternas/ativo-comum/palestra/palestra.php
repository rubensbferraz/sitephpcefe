<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include ("../../../conexao/conexao.php") ?>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="aplic.css">
	<link rel="stylesheet" href="../../../includes/bootstrap/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="../../../includes/bootstrap/css/bootstrap-responsive.css" type="text/css">
    <title>Cadastrando Palestras</title>

	<script>
		$(function() {
			$("#calendario" ).datepicker({
				dateFormat: 'yy/mm/dd',
				dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
				dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
				dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
				monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
				monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
				showOn: "button",
				buttonImage: "calendario.png",
				buttonImageOnly: true,
				showButtonPanel: true
			});
		});
	</script>
</head>
<body>
<nav class="navbar navbar-light bg-light row d-inline-block ml-1 p-2 menuCadastro">
  <a class="navbar-brand" href="../../../index.php">Home
    <img src="../../../imagens/navegacaoDireita.png" width="30" height="25" alt="">
  </a>
  <a class="navbar-brand" href="palestra.php">cadastro
    <img src="../../../imagens/navegacaoDireita.png" width="25" height="25" alt="">
  </a>
</nav>
<section id="palest" class="container">
		<form class="form-group" action="ano.php"  method="POST" name="palestra">
			<div class="row">
					<legend>Ordenando Escala de Palestras Públicas</legend>
					<img src="" alt="" srcset="">
				<div class="col-6">
						<label for="DataPalestra">Data</label>
						<input class="form-control" type="date" name="DataPalestra"/>
				</div>
				<div class="col-6">
						<label for="Palestrante">Palestrante/Orador</label>
						<input class="form-control" type="text" name="Palestrante"/>
				</div>
				<div class="col-6">
						<label for="temaPalestra">Tema da Palestra</label>
						<input class="form-control" type="text" name="TemaPalestra"/>
				</div>
				<div class="col-6">
						<label for="DiretorPalestra">Diretor Reunião</label>
						<input class="form-control" type="text" name="DiretorPalestra"/>
				</div>
            </div>
			<div class="row">
				<div class="col-6">
					<label>Escolha a Semana</label>
					<select class="form-control" type="text" name="Semana" >
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

$sqlBusca = mysqli_query($conn, "SELECT * FROM `palestra` WHERE 1 ") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $sqlBusca");
$linha = $sqlBusca->num_rows;

?>

		<legend>Escala de Oradores para o mês "<?php $my=date('M-Y'); echo $my; ?>"</legend>

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

for ($i=0; $i < $linha; $i++) {
	$escalaMes = mysqli_fetch_array($sqlBusca);
	$vid = $escalaMes['IdPalestra'];
	$mes = $escalaMes['DataPalestra'];
	$mm = explode("-", $mes);
	$atual = $mm[1];
	
	if($m == $atual){
		?>
				<tbody>
						<tr>
							<td><?php echo $escalaMes['DataPalestra'];?></td>
							<td><?php echo $escalaMes['Semana'];?></td>
							<td><?php echo utf8_decode($escalaMes['Palestrante']);?></td>
							<td><?php echo utf8_decode($escalaMes['TemaPalestra']);?></td>
							<td><?php echo utf8_decode($escalaMes['DiretorPalestra']);?></td>
							<?php
						}
					}
					?>
				</tr>
			</tbody>
		</table>
		<form  action="listar.php">
			<button class="btn btn-success btn-lg float-right" type="submit" >Clique para Atualizar</button>
		</form>
	</section> 	
</body>
</html>