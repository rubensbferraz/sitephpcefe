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
        $id           = $_GET['id'];
        $titulo       = $_GET['titulo'];
        $descricao    = $_GET['descricao'];
        $edicao       = $_GET['edicao'];
        $publicacao   = $_GET['dtPublicacao'];
        $isbn         = $_GET['isbn'];
        $preco        = $_GET['preco'];
        $ideditora    = $_GET['id_editora'];
        $idtipoobra   = $_GET['id_tipoobra'];
        $idTipoobra   = $_GET['id_tipoobra'];

            $sql = mysqli_query($conn, "UPDATE tb_titulo t 
            inner join tb_editora edi on edi.id=t.id_editora
            inner join tb_tipoobra tipo on tipo.id=t.id_tipoobra SET 
            t.titulo='$titulo', 
            t.descricao='$descricao', 
            t.edicao='$edicao', 
            t.dtPublicacao='$publicacao', 
            t.isbn='$isbn', 
            t.preco='$preco', 
            t.id_editora='$ideditora',
            t.id_tipoobra='$idtipoobra' 
    
            WHERE t.id='$id'") or die("mysql error:" . mysqli_error($conn) . "<hr>\nQuery: $sql");
            echo ("Alteração realizada com sucesso...");
            header("Location: listarTitulos.php", 3000);


        //-----
        ?>

	</body>

	</html>