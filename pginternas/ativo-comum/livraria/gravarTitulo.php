<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <title></title>
    <?php include ("../../../conexao/conexao.php"); ?>
</head>
<body>
<?php

    $titulo             = $_POST['titulo'];
    $descricao          = $_POST['descricao'];
    $edicao             = $_POST['edicao'];
    $dtPublicacao       = $_POST['dtPublicacao']; 
    $isbn               = $_POST['isbn'];
    $preco              = $_POST['preco'];
    $ideditora          = $_POST['ideditora'];
    $idcomposicao       = $_POST['idcomposicao'];

    $pesquisador        = $_POST['idpesquisador'];
    $psicografo         = $_POST['idpsicografo '];
    $espiritoautor      = $_POST['idespiritoautor'];
    
    $sql = "INSERT INTO tb_titulo (titulo, descricao, edicao, dtPublicacao, isbn, preco, ideditora, idcomposicao) VALUES('$titulo', '$descricao', '$edicao', '$dtPublicacao', '$isbn', '$preco', '$ideditora', '$idcomposicao')";
    $sqlCom = "INSERT INTO tb_composicao (idpesquisar, idpsicografo, idautorEspiritual) VALUES('$pesquisador', '$psicografo', '$espiritoautor')";
    
    if(mysqli_query($conn, $sql,$sqlCom)){
            echo("Titulo cadastrado com sucesso..");

                   
    }elseif (isset($_POST['listar'])) {
        header("Location: listarTitulos.php",3000);
    }
    
    else  {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
        
    }
    
    mysqli_close($conn);
?>  
</body>
</html>