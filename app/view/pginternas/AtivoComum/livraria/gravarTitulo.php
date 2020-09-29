<?php
 session_start();
 ob_start();
 include ("../../../conexao/conexao.php");
 $btncadastrar = filter_input(INPUT_POST, 'btncadastrar', FILTER_SANITIZE_STRING);
 //var_dump($btncadastrar);
 if(isset($btncadastrar)){
    //dados recebidos
    $dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    $erro = false;
    
    //remove os strip_tags
    $dados_st = array_map('strip_tags', $dados_rc);
    $dados = array_map('trim', $dados_st);

    $tipo = $dados['idtipoobra'];
    //var_dump($tipo);
    //remove os strip_tags
    $rs_titulo = "SELECT id FROM tb_titulo WHERE titulo='". $dados['titulo'] ."'";
    $resultado_titulo = mysqli_query($conn, $rs_titulo);
    //var_dump($rs_titulo);
    if(($resultado_titulo) AND ($resultado_titulo->num_rows != 0)){
        $erro = true;
        $_SESSION['msg'] = "Este Título já está cadastrado";
        header("Location: cadastroTitulo.php",3000);
    }elseif($tipo == '1'){
        $grava_Titulo = "INSERT INTO tb_titulo (titulo, descricao, edicao, dtPublicacao, isbn, preco, ideditora, idtipoobra) VALUES(
            '".$dados['titulo'] ."',
            '".$dados['descricao']. "',
            '".$dados['edicao'] ."',
            '".$dados['dtPublicacao'] ."', 
            '".$dados['isbn'] ."',
            '".$dados['preco'] ."',
            '".$dados['ideditora'] ."',
            '".$dados['idtipoobra'] ."'
            )";

            $grava_Pesquisador = "INSERT INTO tb_naomediunico (idpesquisador, idtipoobra) VALUES(
                '".$dados['idpesquisador'] ."',
                '".$dados['idtipoobra'] ."'
                )";        

        $resultado_Titulo = mysqli_query($conn, $grava_Titulo) or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $grava_Titulo");
        $resultado_Pesquisador = mysqli_query($conn, $grava_Pesquisador) or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $grava_Pesquisador");

        if(mysqli_insert_id($conn)){
            $_SESSION['msg'] = "Título cadastro com sucesso!";
            header("Location: cadastroTitulo.php",3000);
        }else{
            $_SESSION['msg'] = "Erro ao cadastrar a unidade de Título!";
        }
    }elseif($tipo == 2){
        $grava_Titulo = "INSERT INTO tb_titulo (titulo, descricao, edicao, dtPublicacao, isbn, preco, ideditora, idtipoobra) VALUES(
            '".$dados['titulo'] ."',
            '".$dados['descricao']. "',
            '".$dados['edicao'] ."',
            '".$dados['dtPublicacao'] ."', 
            '".$dados['isbn'] ."',
            '".$dados['preco'] ."',
            '".$dados['ideditora'] ."',
            '".$dados['idtipoobra'] ."'
            )";


        $grava_psicografo = "INSERT INTO tb_mediunica (idpsicografo, idtipoobra) VALUES(
            '".$dados['idpsicografo'] ."',
            '".$dados['idtipoobra'] ."'
            )";

        $grava_autorEspiritual = "INSERT INTO tb_autorespiritual (idpsicografo) VALUES(
            '".$dados['idpsicografo'] ."'
            )";            

        $resultado_Titulo = mysqli_query($conn, $grava_Titulo) or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $grava_Titulo");

        $resultado_Psicografo = mysqli_query($conn, $grava_psicografo) or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $grava_psicografo");
        $resultado_autoEspiritual = mysqli_query($conn, $grava_autorEspiritual) or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $grava_autorEspiritual");
        if(mysqli_insert_id($conn)){
            $_SESSION['msg'] = "Título cadastro com sucesso!";
            header("Location: cadastroTitulo.php",3000);
        }else{
            $_SESSION['msg'] = "Erro ao cadastrar a unidade de Título!";
        }
    }
     
} //final do if(isset($btncadastrar)) 
 
?>
