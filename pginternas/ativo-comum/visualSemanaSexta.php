<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include "conexao/conexao.php"; ?>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="visualSemana.css">
	<link rel="stylesheet" href="../../../includes/bootstrap/css/bootstrap.css"/>
	<title></title>
</head>
<body id="espelha2Index">
	<?php
		function diasemanaS($dt) {
			$ano =  substr("$dt", 0, 4);
			$mes =  substr("$dt", 5, -3);
			$dia =  substr("$dt", 8, 9);

			$diasemanaS = date('w', mktime(0,0,0,$mes,$dia,$ano));

			switch($diasemanaS) {
				case"0": $diasemanaS = "Domingo";       break;
				case"1": $diasemanaS = "Segunda-Feira"; break;
				case"2": $diasemanaS = "Terça-Feira";   break;
				case"3": $diasemanaS = "Quarta-Feira";  break;
				case"4": $diasemanaS = "Quinta-Feira";  break;
				case"5": $diasemanaS = "Sexta-Feira";   break;
				case"6": $diasemanaS = "Sábado";  	   break;
			}
		}
		//Exemplo de uso
	?>
	<?php
		//Leitura da data
		$dia_array = array('Domingo','Segunda-Feira','Terça-Feira','Quarta-Feira','Quinta-Feira','Sexta-Feira','Sábado');
		//$dia_time = date('w', strtotime($dt));
		//$dia_nome = $dia_array[$dia_time];

		$dt = date("Y-m-d");	//14
		$dt_1 = date('Y-m-d', strtotime("+1 days", strtotime($dt)));// 26
		$dt_2 = date('Y-m-d', strtotime("+2 days", strtotime($dt)));// 27
		$dt_3 = date('Y-m-d', strtotime("+3 days", strtotime($dt)));// 28
		$dt_4 = date('Y-m-d', strtotime("+4 days", strtotime($dt)));// 29
		$dt_5 = date('Y-m-d', strtotime("+5 days", strtotime($dt)));// 30
		$dt_6 = date('Y-m-d', strtotime("+6 days", strtotime($dt)));// 31

	?>
	<div id="escala">
		<?php
			$sqlConsulta = mysqli_query($conn, "SELECT * FROM `palestra` where semana='sexta' order by DataPalestra desc  limit 1");
			$linha = mysqli_num_rows($sqlConsulta);

				for ($i=0; $i <$linha ; $i++) {
					$arrayConsulta = mysqli_fetch_array($sqlConsulta);
					$diaBD = $arrayConsulta['DataPalestra'];
					$palestrante = $arrayConsulta['Palestrante'];
					$tema = $arrayConsulta['TemaPalestra'];
					$sem = $arrayConsulta['Semana'];

					$dd = explode("-", $diaBD);
		?>
		<!--Inicio Amostragem da escala dos SEXTA FEIRA -->
		<div class="sexta border border-success p-2 rounded">
			<?php
				$smq = "Sexta-Feira";
				if($diaBD==$dt && $dia_array[5]==$smq){
			?>
			<p class="sem text-uppercase"><?php echo strtoupper($arrayConsulta['Semana']) ?> / Dia:<?php echo $dd[2] ;?></p>
			<p class="ortD">Orador: <?php echo utf8_decode($palestrante) ;?> </p>
			<p class="tD">Tema: <?php echo utf8_decode($tema) ;?></p>
			<?php
				}elseif ($diaBD==$dt_1 && $dia_array[5]==$smq) {
			?>
			<p class="sem text-uppercase"><?php echo strtoupper($arrayConsulta['Semana']) ?> / Dia:<?php echo $dd[2] ;?></p>
			<p class="ortD">Orador: <?php echo utf8_decode($palestrante) ;?> </p>
			<p class="tD">Tema: <?php echo utf8_decode($tema) ;?></p>

			<?php
				}elseif ($diaBD==$dt_2 && $dia_array[5]==$smq) {
			?>
			<p class="sem text-uppercase"><?php echo strtoupper($arrayConsulta['Semana']) ?> / Dia:<?php echo $dd[2] ;?></p>
			<p class="ortD">Orador: <?php echo utf8_decode($palestrante) ;?> </p>
			<p class="tD">Tema: <?php echo utf8_decode($tema) ;?></p>

			<?php
				}elseif ($diaBD==$dt_3 && $dia_array[5]==$smq) {
			?>
			<p class="sem text-uppercase"><?php echo strtoupper($arrayConsulta['Semana']) ?> / Dia:<?php echo $dd[2] ;?></p>
			<p class="ortD">Orador: <?php echo utf8_decode($palestrante) ;?> </p>
			<p class="tD">Tema: <?php echo utf8_decode($tema) ;?></p>

			<?php
				}elseif ($diaBD==$dt_4 && $dia_array[5]==$smq) {
			?>
			<p class="sem text-uppercase"><?php echo strtoupper($arrayConsulta['Semana']) ?> / Dia:<?php echo $dd[2] ;?></p>
			<p class="ortD">Orador: <?php echo utf8_decode($palestrante) ;?> </p>
			<p class="tD">Tema: <?php echo utf8_decode($tema) ;?></p>

			<?php
				}elseif ($diaBD==$dt_5 && $dia_array[5]==$smq) {
			?>
			<p class="sem text-uppercase"><?php echo strtoupper($arrayConsulta['Semana']) ?> / Dia:<?php echo $dd[2] ;?></p>
			<p class="ortD">Orador: <?php echo utf8_decode($palestrante) ;?> </p>
			<p class="tD">Tema: <?php echo utf8_decode($tema) ;?></p>

			<?php
				}elseif ($diaBD==$dt_6 && $dia_array[5]==$smq) {
			?>
			<p class="sem text-uppercase"><?php echo strtoupper($arrayConsulta['Semana']) ?> / Dia:<?php echo $dd[2] ;?></p>
			<p class="ortD">Orador: <?php echo utf8_decode($palestrante) ;?> </p>
			<p class="tD">Tema: <?php echo utf8_decode($tema) ;?></p>

			<?php
				}
			?>
			</div><!-- FECHAMENTO DA DIV class Domingo -->	
		<?php
			}//fechamento do for principal
		?>
	</div>
</body>
</html>