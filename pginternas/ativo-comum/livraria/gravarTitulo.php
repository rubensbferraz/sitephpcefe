<?php
    include ("../../../conexao/conexao.php");

    $titulo             = $_POST['titulo'];
    $descricao          = $_POST['descricao'];
    $edicao             = $_POST['edicao'];
    $dtPublicacao       = $_POST['dtPublicacao']; 
    $isbn               = $_POST['isbn'];
    $preco              = $_POST['preco'];
    $ideditora          = $_POST['ideditora'];
    $idtbtipo           = $_POST['idtbtipo'];
    $idpesquisador      = $_POST['idpesquisador'];
    $idpsicografo       = $_POST['idpsicografo'];
    $idautorEspiritual  = $_POST['idautorEspiritual'];

    if(isset($_POST['cadastrar'])){

        $sql = mysqli_query($conn, "INSERT INTO tb_titulos (titulo, descricao, edicao, dtPublicacao, isbn, preco, ideditora, idtbtipo, idpesquisador, idpsicografo, idautorEspiritual)
            VALUE('$titulo', '$descricao', '$edicao', '$dtPublicacao', '$isbn', '$preco', '$ideditora', '$idtbtipo', '$idpesquisador', '$idpsicografo', '$idautorEspiritual')"or die("mysql error:" . mysqli_error()));
            
            echo("Titulo cadastrado com sucesso..");
            header("Location: cadastroTitulo.php",3000);
                   
    }elseif(isset($_POST['listar'])){
            header("Location: listarTitulos.php",3000);
        
    }

?>