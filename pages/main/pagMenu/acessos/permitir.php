<!DOCTYPE html>
<html>

<head>
	<title>Solicitando Permissão para envio de arquivos</title>
		<meta http-equiv="Content-Type" content="IE=edge charset=utf-8">
		<link rel="stylesheet" href="style.css">
	  	<link rel="stylesheet" href="../../../includes/bootstrap/css/bootstrap.css" type="text/css">
    	<link rel="stylesheet" href="../../../includes/bootstrap/css/bootstrap-responsive.css" type="text/css"> 
 	 	<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />    	
		<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

		<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
</head>
<body>
<?php
	$data = date('d-m-Y');
	print_r($data);
 ?>
	<section id="permissao">
		<div class="for" >
			<form class="form-horizontal" accept="2">
			<fieldset>
				<legend>Solicitando Permissão</legend>

				<div class="enviodados">
					<label>Nome Completo:</label>
					<input type="text" name="nomeAdm" />
				</div>
				<div>
					<label>Email:</label>
					<input type="email" name="email"/>
				</div>
				<div>
					<label>Casa Espírita:</label>
					<input type="text" name="casaespirita"/>
				</div>
				<div>
					<label>Escolha uma Senha:</label>
					<input type="password" name="senhaAdm"/>
				</div>
				<div>
					<label>Ano de Nascimento:</label>
					<input type="text" name="anonascimento"/>
				</div>
				<div>
					<input type="hidden" name="data" value="<?php echo $data ;?>">
				</div>

			</fieldset>
			</form>

			
			
		</div>
	</section>

</body>
</html>