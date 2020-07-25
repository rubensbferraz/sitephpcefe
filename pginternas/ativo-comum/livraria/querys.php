<?php 
    /*$listaTesteSql = mysqli_query($conn, "SELECT t.idtb_teste, t.texto FROM tb_teste t, tb_teste2 t2;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaTesteSql");
    $listaTeste = $listaTesteSql->num_rows;*/

    $listaSql = mysqli_query($conn, "SELECT t.id, t.titulo, t.descricao, t.edicao, t.dtPublicacao, t.isbn, t.preco, t.ideditora, t.idcomposicao FROM tb_titulo t, tb_editora ed, tb_composicao com, tb_pesquisador pesq, tb_psicografo psi, tb_autorespiritual aut where com.id=pesq.id and psi.id=aut.idpsicografo;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaSql");
    $lista = $listaSql->num_rows;

    $listaEdSql = mysqli_query($conn, "SELECT id, editora, sigla FROM tb_editora  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaEdSql");
    $listaEd = $listaEdSql->num_rows;

    //trabalhado com a tabela TB_COMPOSICAO
    $m = 'Mediúnica';
    $o = 'Obra Básica';
    $p = 'Pesquisa';

    $listaComSql = mysqli_query($conn, "SELECT com.id, com.tipoObra FROM tb_composicao com;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaComSql");
    $listaCom = $listaComSql->num_rows;

    $listaComPesqSql = mysqli_query($conn, "SELECT com.id, com.tipoObra, pesq.pesquisador FROM tb_composicao com, tb_pesquisador pesq where com.id=pesq.idcomposicao;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaComPesqSql");
    $listaComPesq = $listaComPesqSql->num_rows;

    $listaComPsiSql = mysqli_query($conn, "SELECT com.id, com.tipoObra, psi.psicografo FROM tb_composicao com, tb_pesquisador pesq, tb_psicografo psi where com.id=psi.idcomposicao;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaComPsiSql");
    $listaComPsi = $listaComPsiSql->num_rows;

    //AQUI FINALIZA O TRABALHO COM A TABELA COMPOSIÇÃO

    $listaAutorPsiSql = mysqli_query($conn, "SELECT aut.id, aut.espiritoAutor, psi.id FROM tb_autorespiritual aut, tb_psicografo psi where aut.idpsicografo=psi.id;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaAutorPsiSql");
    $listaAutorPsi = $listaAutorPsiSql->num_rows;

    /*$listaPesqSql = mysqli_query($conn, "SELECT pesq.id, pesq.pesquisador, pesq.email, pesq.celular FROM tb_pesquisador pesq  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaPesqSql");
    $listaPesq = $listaPesqSql->num_rows;*/

    $listaPsiSql = mysqli_query($conn, "SELECT psi.id, psi.psicografo, psi.email, psi.celular, aut.id, aut.espiritoAutor FROM tb_psicografo psi, tb_autorespiritual aut  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaPsiqSql");
    $listaPsi = $listaPsiSql->num_rows;

    $listaAutSql = mysqli_query($conn, "SELECT aut.id, aut.espiritoAutor FROM tb_autorespiritual aut  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaAutqSql");
    $listaAut = $listaAutSql->num_rows;

    $listaCidSql = mysqli_query($conn, "SELECT cid.id, cid.cidade, cid.uf FROM tb_cidade cid  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaCidSql");
    $listaCid = $listaCidSql->num_rows;

    //-----
    $listaEditoraSql = mysqli_query($conn, "SELECT * FROM tb_editora ed, tb_cidade cid where ed.idcidade=cid.id  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaEditoraSql");
    $listaEditora = $listaEditoraSql->num_rows;

    $listaAutorEspSql = mysqli_query($conn, "SELECT * FROM tb_autorespiritual aut  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaAutorEspSql");
    $listaAutorEsp = $listaAutorEspSql->num_rows;

    $listaPsicografoSql = mysqli_query($conn, "SELECT * FROM tb_psicografo psi  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaPsicografoSql");
    $listaPsicografo = $listaPsicografoSql->num_rows;

    $listaPesquisadorSql = mysqli_query($conn, "SELECT * FROM tb_pesquisador pesq  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaPesquisadorSql");
    $listaPesquisador = $listaPesquisadorSql->num_rows;
?>