<?php
 session_start();
 include ("../../../conexao/conexao.php");
 $btnCadUsuario = filter_input(INPUT_POST, 'btncadastrar', FILTER_SANITIZE_STRING);
 //var_dump($btnCadUsuario);
 if(isset($btnCadUsuario)){
     //dados recebidos
     $dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
     
     $erro = false;
     
     //remove os strip_tags
     $dados_st = array_map('strip_tags', $dados_rc);
     $dados = array_map('trim', $dados_st);
     
     //remove os strip_tags
     
     if(in_array('', $dados)){
         $erro = true;

         $rs_titulo = "SELECT id FROM tb_titulo WHERE titulo='". $dados['titulo'] ."'";
         $resultado_titulo = mysqli_query($conn, $rs_titulo);
            if(($resultado_titulo) AND ($resultado_titulo->num_rows != 0)){
                $erro = true;
                echo  "Este usuário já está sendo utilizado";
                header("Location: cadastroTitulo.php",3000);
            }else{
                if($erro){
                    var_dump($dados);
                    $grava_Titulo = "INSERT INTO tb_titulo (titulo, descricao, edicao, dtPublicacao, isbn, preco, ideditora, idtipoObra) VALUES(
                        '".$dados['titulo'] ."',
                        '".$dados['descricao']. "',
                        '".$dados['edicao'] ."',
                        '".$dados['dtPublicacao'] ."', 
                        '".$dados['isbn'] ."',
                        '".$dados['preco'] ."',
                        '".$dados['ideditora'] ."',
                        '".$dados['idtipoObra'] ."'
                        )";
            
                    $grava_NaoMed = "INSERT INTO tb_naomediunico (idpesquisador, idtipoObra) VALUES(
                    '".$dados['idpesquisador'] ."',
                    '".$dados['idtipoObra'] ."'
                    )";

                    $grava_Med = "INSERT INTO tb_mediunico (idpsicografo, idautorEspirital, idtipoObra) VALUES(
                        '".$dados['idpsicografo'] ."',
                        '".$dados['idautorEspirital'] ."',
                        '".$dados['idtipoObra'] ."'
                        )";

                    $resultado_Titulo = mysqli_query($conn, $grava_Titulo) or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $grava_Titulo");
                    $resultado_NaoMed = mysqli_query($conn, $grava_NaoMed) or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $grava_NaoMed");
                    $resultado_Med = mysqli_query($conn, $grava_Med) or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $grava_Med");
                    if(mysqli_insert_id($conn)){
                        echo "Título cadastro com sucesso!";
                        header("Location: cadastroTitulo.php",3000);
                    }else{
                        echo "Erro ao cadastrar a unidade de Título!";
                    }
                }
            }

         
        }
}        
    

?>
