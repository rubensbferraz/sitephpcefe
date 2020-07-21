<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "conexao/conexao.php"; ?>
	<?php //include "conexao/funcao.php" ;?>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <link rel="stylesheet" href="../../../includes/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="js/libs/angular.min.js"></script>
    <script type="text/javascript" src="js/libs/angular-ui-router.min.js"></script>
	<title></title>
</head>
<body id="espelhaIndex">
	<?php
		function diasemanaD($dt) {
			$ano =  substr("$dt", 0, 4);
			$mes =  substr("$dt", 5, -3);
			$dia =  substr("$dt", 8, 9);

			$diasemanaD = date('w', mktime(0,0,0,$mes,$dia,$ano));

			switch($diasemanaD) {
				case"0": $diasemanaD = "Domingo";       break;
				case"1": $diasemanaD = "Segunda-Feira"; break;
				case"2": $diasemanaD = "Terça-Feira";   break;
				case"3": $diasemanaD = "Quarta-Feira";  break;
				case"4": $diasemanaD = "Quinta-Feira";  break;
				case"5": $diasemanaD = "Sexta-Feira";   break;
				case"6": $diasemanaD = "Sábado";  	   break;
			}
		}
		//Leitura da data
		$dia_array = array('Domingo','Segunda-Feira','Terça-Feira','Quarta-Feira','Quinta-Feira','Sexta-Feira','Sábado');

		$dt = date("Y-m-d");
		$diaNmSem = date('w', strtotime($dt)); //echo $diaNmSem; //número que representa o dia Da semana 
		$diaTxSem = $dia_array[$diaNmSem]; //texto referente ao semana 	
		
		//Captura númeração corresponte a semana e 0 a 6 Sendo 0 para domingo e 6 para sábado
		$diaNmSem_1 = date('w', strtotime("+1 days", strtotime($dt))); //echo $diaNmSem_1; //Quarta-Feira
		$diaNmSem_2 = date('w', strtotime("+2 days", strtotime($dt))); //echo $diaNmSem_2; //Quinta-feira
		$diaNmSem_3 = date('w', strtotime("+3 days", strtotime($dt))); //echo $diaNmSem_3; //Sexta-feira
		$diaNmSem_4 = date('w', strtotime("+4 days", strtotime($dt))); //echo $diaNmSem_4; //Sábado
		$diaNmSem_5 = date('w', strtotime("+5 days", strtotime($dt))); //echo $diaNmSem_5; //Domingo
		$diaNmSem_6 = date('w', strtotime("+6 days", strtotime($dt))); //echo $diaNmSem_6; //Segunta-feira
		$diaNmSem_7 = date('w', strtotime("+7 days", strtotime($dt))); //echo $diaNmSem_7; //Terça-feira
		
		//Captura númeração corresponte ao dia do sistema
		$diaS = date('d', strtotime($dt)); //echo $diaS;//DIA de Hoje DO SISTEMA	
		$diaS_1 = date('d', strtotime("+1 days", strtotime($dt))); //echo $diaS_1; //Quarta-Feira
		$diaS_2 = date('d', strtotime("+2 days", strtotime($dt))); //echo $diaS_2; //Quinta-feira
		$diaS_3 = date('d', strtotime("+3 days", strtotime($dt))); //echo $diaS_3; //Sexta-feira
		$diaS_4 = date('d', strtotime("+4 days", strtotime($dt))); //echo $diaS_4; //Sábado
		$diaS_5 = date('d', strtotime("+5 days", strtotime($dt))); //echo $diaS_5; //Domingo
		$diaS_6 = date('d', strtotime("+6 days", strtotime($dt))); //echo $diaS_6; //Segunta-feira
		$diaS_7 = date('d', strtotime("+7 days", strtotime($dt))); //echo $diaS_7; //Terça-feira

	?>

	<div id="escala" class="">
		<?php
			$mes = date('m');
			$query="SELECT DATE_FORMAT(DataPalestra, '%d') as diapalestra, DATE_FORMAT(DataPalestra, '%m') as mespalestra, IdPalestra, Palestrante, TemaPalestra, Semana, DATE_FORMAT(DataPalestra, '%d/%m/%Y') as dataPalestra
			FROM palestra where Semana='domingo' AND DATE_FORMAT(DataPalestra, '%m')=$mes order by diapalestra desc";	
			$rs = mysqli_query($conn, $query) or die(mysqli_error($conn));
			$linha = mysqli_fetch_array($rs); //echo $linha['diapalestra'];
			$registros = $rs->num_rows; //echo $registros;
			//$arrayConsulta = mysqli_fetch_array($rs);
			$diaPalestra = $linha['diapalestra'];//echo $diaPalestra;
			
			$m = date('d');//echo $m;
			if($diaS==$diaPalestra or $diaS_1==$diaPalestra or $diaS_2==$diaPalestra or $diaS_3==$diaPalestra or $diaS_4==$diaPalestra or $diaS_5==$diaPalestra or $diaS_6==$diaPalestra or $diaS_7==$diaPalestra){
				for($i=0; $i < $registros; $i++){
			
					$diaBD = $linha['dataPalestra'];//echo $diaBD;
					$palestrante = $linha['Palestrante'];
					$tema = $linha['TemaPalestra'];
					$sem = $linha['Semana'];
					$dd = explode("/", $diaBD);
				}//fechamento do for
				?>
				<div class="domingo border border-success p-2 rounded">
					<?php
						$smq = "domingo";
					?>
							<p class="sem text-uppercase"><?php echo strtoupper($sem) ?> / Dia:&nbsp &nbsp<?php echo $dd['0'] ;?></p>
							<p class="ortD">Orador: <?php echo utf8_encode($palestrante) ;?> </p>
							<p class="tD">Tema: <?php echo utf8_encode($tema) ;?></p>
				<?php
			}else{
				?>
				<div class="domingo border border-success p-2 rounded">
					<?php
						$smq = "domingo";
					?>
							<p class="sem text-uppercase"><?php echo "Não informado" ?> / Dia:&nbsp &nbsp<?php ?></p>
							<p class="ortD">Orador: <?php echo "Não informado" ;?> </p>
							<p class="tD">Tema: <?php echo  "Não informado";?></p>
			<?php
			} ;     //Fim do If
			?>
				</div>
				<?php
				?>
	</div><!-- FECHAMENTO DA DIV PRINCIPAL -->
</body>
</html>
