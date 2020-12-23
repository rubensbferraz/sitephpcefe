<!DOCTYPE html>
<?php
	 include '../../../../Config/conexao.php';
	 include '../../../../Config/config.php';
?>
<html lang="pt-br">
<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" >
		<title>Casa Espírita Fraternidade Emmanuel</title>
		<link rel="stylesheet" href="<?php echo DIRINCLUDE . 'bootstrap/css/bootstrap.min.css' ?>">
		<link rel="stylesheet" href="<?php echo DIRCSS . 'StyleAdm.css' ?>">

</head>
<body>
	<div id="listar" class="mt-2 ml-2">
		<?php
			session_start();
			if(!isset($_SESSION["nomeAdm"]) || !isset($_SESSION["senhaAdm"])){
				header("Location: ");
				exit();
			}
			
		?>
		<?php
			$trabalhador = $_SESSION['nomeAdm'];

			$query = mysqli_query($conn, "SELECT * FROM tb_adm where '$trabalhador' = nomeAdm ") or die("Error: " .mysqli_error($query));
			while ($row = mysqli_fetch_array($query)) {
			
				$nome = $row['nomeAdm'];
				$libera = $row['liberaAdm'];

				echo "Olá, ".ucfirst($nome) ." <br> Seja Bem-vindo ao campos de administração. </br> ";
			}

		?>
		<hr/>
		<div class="container ml-3">
			<?php
			$ad = "administracao";

				if($libera == $ad){
					echo "Você é Membro/Coordenador(a) da - Administração";

			?>
				<div class="meusLinks">
					<a name="cadastroPalestra" href="<?PHP echo DIRPAGES.'main/palestra/palestra.php' ?>">Cadastrar Palestras</a></br>
					<a name="cadastroTitulo" href="<?PHP echo DIRPAGES. 'main/livraria/cadastroTitulo.php'?>">Cadastroar Títulos</a>
				</div>
				
			<?php
			}
			?>
		</div>
		<div class="container ml-3">
			<?php
			$div = "divulgacao";

				if($libera == $div){
					echo "Você é Diretor(a)/Coordenador(a) do - DEDIV";

			?>
				<div class="meusLinks">
					<a name="cadastroPalestra" href="<?PHP echo DIRPAGES.'main/palestra/palestra.php' ?>">Cadastrar Palestras</a></br>
				</div>
				
			<?php
			}
			?>
		</div>
		<hr/>
		<div class="bannerNatureza text-center">
			<a href="logout.php"><img class="rounded mx-auto d-block" src="<?PHP echo DIRIMG.'ImgHome/bannerNatureza.png' ?>" style: width="250px"/></a><p>Clique na imagem para sair</p>
		</div>
	</div>
	<script src="<?php echo DIRJS. 'jquery/jquery-3.5.1.min.js' ?>"></script>
</body>
</html>
