<!DOCTYPE html>
<?php
	 include '../../../../Config/conexao.php';
	 include '../../../../Config/config.php';
?>
<html lang="pt-br">
<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" >
		<title>Casa Espírita Fraternidade Emmanuel</title>
		<link rel="stylesheet" href="StyleAdm.css">
		<link rel="stylesheet" href="<?php DIRINCLUDE . 'bootstrap/css/bootstrap.min.css' ?>">
		<link href='https://fonts.googleapis.com/css?family=Roboto:wght@400;500&display=swap' rel='stylesheet' type='text/css'>

</head>
<body>
	<div id="listar" class="mt-5">
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

			$query = mysqli_query($conn, "SELECT * FROM tb_adm where '$trabalhador' = nomeAdm ") or die("Error: " .mysqli_error($query));
			while ($row = mysqli_fetch_array($query)) {
			
				$nome = $row['nomeAdm'];
				$libera = $row['liberaAdm'];

				echo "Olá, ".ucfirst($nome) ." <br> Seja Bem-vindo ao campos de administração. </br></br> ";
			}

		?>
		<hr/>
		<div class="ml-3">
			<?php
			$ad = "divulgacao";

				if($libera == $ad){
					echo "Você é Diretor(a)/Coordenador(a) do - DEDIV - </br></br>";

			?>
				<div class="meusLinks">
				<a name="cadastroPalestra" href="<?PHP echo DIRPAGES.'main/palestra/palestra.php' ?>">Cadastrar Palestras</a>
				<a name="cadastroTitulo" href="<?PHP echo DIRPAGES. 'main/livraria/cadastroTitulo.php'?>">Cadastroar Títulos</a>
				</div>
				
			<?php
			}
			?>
		</div>
		<hr/>
		<div class="mt-3">
			<a href="logout.php" title="fechar seu login"><img src="<?PHP echo DIRIMG.'ImgHome/bannerNatureza.png' ?>" style="width: 200px;"/></a>
		</div>
	</div>
</body>
</html>
