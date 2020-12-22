<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" type="text/css" href="../../../../css/cefe.css">
    <link rel="stylesheet" type="text/css" href="../../../../css/menu.css">
    <link rel="stylesheet" href="../../../../Includes/bootstrap/css/bootstrap.css">
    <title>Serviço de login</title>
</head>
<body>
    <div id="modal-solicitar" class="container mt-5">
        <script src="../../../../Includes/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <link href="../../../../Includes/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />       
        <div class="row justify-content-md-center">
            <form class="form-group" method="POST" action="altenticacao.php" target="principal">
                <legend>Área segura</legend>
                    <div>
                        <span id="sprytextfield1">
                            <label>Seu Nome:</label>
                            <input class="form-control" type="text" required class="txt"  name="nomeAdm">
                        </span>
                    </div>
                    <div>
                        <span id="sprytextfield2">
                            <label>Senha</label>
                            <input class="form-control" type="password" required class="txt"  name="senhaAdm">
                        </span>
                    </div>
                    <div class="row-1 mt-3">
                        <button type="submit" value="Entrar" class="btn btn-success" name="logar">Entrar</button>
                    </div>
                <!-- Campos escondidos do formulário -->
                <div class="row">
                    <input type="hidden" class="form-control"  name="funcaoAdm">
                </div>
                <div class="row">
                    <input type="hidden" class="form-control"  name="area">
                </div>												
                <div class="row">
                    <input type="hidden" class="form-control"  name="ativoAdm" value="1">
                </div>													
            </form>
        </div>
    </div>    
    <script src="../../../../js/jquery/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../../../Includes/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>