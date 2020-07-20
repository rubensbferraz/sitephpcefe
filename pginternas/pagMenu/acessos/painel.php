<!DOCTYPE html>
<?php
 	include "../../../conexao/conexao.php";
?>
<html lang="pt-br">
<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" >
		<title>Casa Espírita Fraternidade Emmanuel</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="../../../includes/bootstrap/css/bootstrap.css">
		<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

</head>
<body>
	<div id="listar" class="container mt-5">
		<?php
			session_start();
			if(!isset($_SESSION["nomeAdm"]) || !isset($_SESSION["senhaAdm"])){
				header("Location: ");
				exit();
			}
		?>
		<?php
			$trabalhador = $_SESSION['nomeAdm'];

			/*if($conn->mysqli_connect_error){
				printf("Falha na conexão com o banco de dados.: %s\n", $conn->mysqli_connect_error);
				exit();
			}*/

			$query = mysqli_query($conn, "SELECT * FROM `adm` where '$trabalhador' = nomeAdm ") or die("Error: " .mysqli_error($query));
			while ($row = mysqli_fetch_array($query)) {
			
				$nome = $row['nomeAdm'];
				$libera = $row['liberaAdm'];

				echo "Olá, ".ucfirst($nome) ." <br> Seja Bem-vindo ao campos de administração. ";
			}

		?>
		<hr/>
		<div class="ml-3">
			<?php
			$dv = "divulgacao";

				if($libera == $dv){
					echo "Você é Diretor(a)/Coordenador(a) do - DEDIV - <br/>";
			?>
				<a href="../../../pginternas/ativo-comum/palestra/palestra.php">Cadastrar Palestras</a>
			<?php
			}
			?>
		</div>
		<hr/>
		<div class="mt-3">
			<a href="logout.php" title="fechar seu login"><img src="../../../imagens/sairPorta.png" style="width: 40px;"/></a>
		</div>
</body>
</html>
