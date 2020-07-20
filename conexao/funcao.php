<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <link rel="stylesheet" href="../../../includes/bootstrap/css/bootstrap.css">
</head>
<body>
<?php include "conexao/conexao.php"; ?>
<?php date_default_timezone_set('America/Sao_Paulo'); ?>
    <?php
        function formata_data($data)
        {
            if(strlen($data) == 10){
                $data = explode("-", $data);
                $data = "$data[2]/$data[1]/$data[0]";
            }else{
                $data = "";
            }
            return $data;
        }
        
        function desformata_data($data)
        {
            $data = explode ("/", $data); 
            $data = "$data[2]-$data[1]-$data[0]"; 
            return $data;
        }
        
        function insereNulo($dado)
        {
            if(strlen($dado) == 0){
                $dado = "null";
            }
        
            return $dado;
        }
        
        function diasemanacodigo($data) {
            //formato dd/mm/aaaa
            $ano =  substr("$data", 0, 4);
			$mes =  substr("$data", 5, -3);
			$dia =  substr("$data", 8, 9);
            //date('w', strtotime($dt))

            $codigodia = date("w", mktime(0,0,0,(int)$mes,(int)$dia,(int)$ano) );
            //$codigodia = date("w", mktime(0,0,0,(int)$mes,(int)$dia,(int)$ano) );
            return $codigodia;
            print_r($codigodia);
        }
        
        function diasemanaextenso($data){
            //formato dd/mm/aaaa
            $diasemana = diasemanacodigo($data);
            
            switch($diasemana) {
                case"0": $diasemana = "Domingo";       break;
                case"1": $diasemana = "Segunda-Feira";   break;
                case"2": $diasemana = "Terça-Feira"; break;
                case"3": $diasemana = "Quarta-Feira";    break;
                case"4": $diasemana = "Quinta-Feira";    break;
                case"5": $diasemana = "Sexta-Feira";     break;
                case"6": $diasemana = "Sábado";   break;
            }
        
            return $diasemana;
        }
        
        function horariopaletra($codigodia){
            $horario = array("19h","","","","","","");
            
            return $horario[(INT)$codigodia];
        }
        
        function horariopasse($codigodia){
            $horario = array("18h50","","","","19h50","","13h45");
            
            return $horario[(INT)$codigodia];
        }
        
        function geraColecao($conn,  $sql )
        {
            $result = mysqli_query($conn, $sql );
            $num_rows = 0;
            $i = null;
            while ( $row = mysqli_fetch_array($result) )
            {
                $last_result[$num_rows] = $row; 
                $num_rows++;
            }
            
            return $last_result;
        }
        
        $dataAtual=date("d/m/20y");
        $diaAtual=date('d');
        $mesAtual=(int)date('m');
        $anoAtual=date('20y');
        $nmMes = array("", "janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro");
        $tipoInformativo = array('N'=>"Notícias", 'D'=>"Destaque", 'A'=>"Avisos");
        $periodoPasse = array(1=>"Domingo de manhã", 2=>"Domingo à noite", 3=>"Sexta-feira à noite");
    ?>
            		
	</div>
</body>
</html>