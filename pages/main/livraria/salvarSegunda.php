<!DOCTYPE html>
	<html>

	<head>
	    <title></title>
	    <meta http-equiv="Content-Type" content="IE=edge charset=ISO-8859-1">
	</head>

	<body>
	    <?php
        include "../../../Config/conexao.php";
        ?>
	    <?php ini_set('default_charset', 'utf-8'); ?>

	    <?php
        
        $idtipoobra   = $_GET['id_tipoobra'];
        //idtipoobra = 1 é Mediunica e 2 Não Mediunico
        if($idtipoobra=='1'){
            $idpsicografo = $_GET['id'];
            $idautorEspiritual = $_GET['id_psicografo'];
            $sqlM = mysqli_query($conn, "UPDATE tb_mediunica m 
            inner join tb_psicografo psi on psi.id=m.id_psicografo
            inner join tb_autorEspiritual aut on aut.id_psicografo=psi.id SET 
            m.id_psicogrado='$idpsicografo', 
            aut.id_psicogrado='$idautorEspiritual'  
    
            WHERE m.id='$idtipoobra'") or die("mysql error:" . mysqli_error($conn) . "<hr>\nQuery: $sql");
            echo ("Alteração realizada com sucesso...");
            header("Location: listarTitulos.php", 10000);
        }else{
            $idpesquisador = $_GET['id'];
            $sqlMN = mysqli_query($conn, "UPDATE tb_naomediunico mn 
            inner join tb_pesquisador pes on pes.id=mn.id_pesquisador SET 
            mn.id_pesquisador='$idpesquisador'  
    
            WHERE mn.id='$idtipoobra'") or die("mysql error:" . mysqli_error($conn) . "<hr>\nQuery: $sql");
            echo ("Alteração realizada com sucesso...");
            header("Location: listarTitulos.php", 10000);
        }




        //-----
        ?>

	</body>

	</html>