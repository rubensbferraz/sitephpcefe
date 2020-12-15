	<?php
		$meses = array (1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");
		$diasdasemana = array (1 => "Segunda-Feira",2 => "Terça-Feira",3 => "Quarta-Feira",4 => "Quinta-Feira",5 => "Sexta-Feira",6 => "Sábado",0 => "Domingo");
		//Seleciona dados do Banco de dados
		$query = "SELECT date_format(dataPalestra, '%d-%m-%Y') as DataPalestra, oradorPalestra, temaPalestra, diretorPalestra, semanaPalestra FROM tb_palestra where semanaPalestra='sexta'";
		$listaDados = mysqli_query($conn, $query);
		$registros = $listaDados->num_rows; //echo $registros;

		$variavel = date("d/m/Y");
		$variavel = str_replace('/','-',$variavel);
		$hoje = getdate(strtotime($variavel)); //var_dump($hoje);
//------------------------------------
	$diaS = date('d', strtotime("+0 days", strtotime($variavel))); 
	$diaS_1 = date('d', strtotime("+1 days", strtotime($variavel)));
	$diaS_2 = date('d', strtotime("+2 days", strtotime($variavel)));
	$diaS_3 = date('d', strtotime("+3 days", strtotime($variavel)));
	$diaS_4 = date('d', strtotime("+4 days", strtotime($variavel)));
	$diaS_5 = date('d', strtotime("+5 days", strtotime($variavel)));
	$diaS_6 = date('d', strtotime("+6 days", strtotime($variavel)));
	$diaS_7 = date('d', strtotime("+7 days", strtotime($variavel))); 
	$arryDiasSistema = array($diaS,$diaS_1,$diaS_2,$diaS_3,$diaS_4,$diaS_5,$diaS_6,$diaS_7);
//-----------------------------------
		$dia = $hoje["mday"]; //echo $dia;//captura o dia da data $variavel
		$mes = $hoje["mon"]; //echo $nomediadasemana;//captura o mes da data $variavel
		$nomemes = $meses[$mes]; //captura o mês da $variavel
		$ano = $hoje["year"]; //captura o ano da $variavel
		$diadasemana = $hoje["wday"]; //captura o número correspondente da semana na data da $variavel
		$nomediadasemana = $diasdasemana[$diadasemana];//echo $nomediadasemana;//captura o nome da semana na data da $variavel
		//echo "$nomediadasemana, $dia de $nomemes de $ano";
		while ($linha = mysqli_fetch_array($listaDados)) { 
				$dtPalestra = explode('-', $linha['DataPalestra']);
				$dtPalestraDia = array($dtPalestra[0]);
				$resultArraySearch = array_search($dia, $dtPalestraDia);//var_dump($resultArraySearch);
				if($dtPalestraDia >= $resultArraySearch){
					$diaBD = $linha['DataPalestra']; //echo $diaBD;
					$orador = $linha['oradorPalestra'];
					$tema = $linha['temaPalestra'];
					$sem = $linha['semanaPalestra']; //echo $sem['Semana'];
					$smq = 'sexta';
					echo "
					<div class='sexta border border-success p-2 rounded'>
				
					
					<p class='sem text-uppercase'> ". strtoupper($sem)." / Dia:&nbsp &nbsp ". $dtPalestra['0'] ."</p>
					<p class='ortD'>Orador: ". utf8_encode($orador)." </p>
					<p class='tD'>Tema: ".utf8_encode($tema) ."</p> </div>
				";
				}else{
					$smq = 'sexta';
					echo "
					<div class='sexta border border-success p-2 rounded'>
					<p class='sem text-uppercase'> ".$smq."  / Dia:&nbsp &nbsp </p>
					<p class='ortD'>Orador:  Não informado;  </p>
					<p class='tD'>Tema:   Não informado; </p></div>
					";
				}break;
		}

	?>
</body>

</html>