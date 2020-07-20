<?php 
    $listaSql = mysqli_query($conn, "SELECT t.idtitulo, t.titulo, t.descricao, t.edicao, t.dtPublicacao, t.isbn, t.preco, t.ideditora, t.idtbtipo, t.idpesquisador, t.idpsicografo, t.idautorEspiritual, psi.psicografo, aut.espiritoAutor, ed.sigla, pesq.pesquisador, tip.tipo FROM tb_titulos t, tb_psicografo psi, tb_autorespiritual aut, tb_editora ed, tb_tipoobra tip, tb_pesquisador pesq where t.idpsicografo=psi.idpsicografo and t.idautorEspiritual=aut.idautorEspiritual and t.ideditora=ed.ideditora and t.idtbtipo=tip.idtbtipo and t.idpesquisador=pesq.idpesquisador;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaSql");
    $lista = $listaSql->num_rows;

    $listaEdSql = mysqli_query($conn, "SELECT ideditora, editora, sigla FROM tb_editora  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaEdSql");
    $listaEd = $listaEdSql->num_rows;

    $listaTipoSql = mysqli_query($conn, "SELECT tip.idtbtipo, tip.tipo FROM tb_tipoobra tip  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaTipoSql");
    $listaTipo = $listaTipoSql->num_rows;

    $listaPesqSql = mysqli_query($conn, "SELECT pesq.idpesquisador, pesq.pesquisador, pesq.email, pesq.celular FROM tb_pesquisador pesq  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaPesqSql");
    $listaPesq = $listaPesqSql->num_rows;

    $listaPsiSql = mysqli_query($conn, "SELECT psi.idpsicografo, psi.psicografo, psi.email, psi.celular FROM tb_psicografo psi  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaPsiqSql");
    $listaPsi = $listaPsiSql->num_rows;

    $listaAutSql = mysqli_query($conn, "SELECT aut.idautorEspiritual, aut.espiritoAutor FROM tb_autorespiritual aut  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaAutqSql");
    $listaAut = $listaAutSql->num_rows;

    $listaCidSql = mysqli_query($conn, "SELECT cid.idcidade, cid.cidade, cid.uf FROM tb_cidade cid  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaCidSql");
    $listaCid = $listaCidSql->num_rows;

    //-----
    $listaEditoraSql = mysqli_query($conn, "SELECT * FROM tb_editora ed, tb_cidade cid where ed.idcidade=cid.idcidade  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaEditoraSql");
    $listaEditora = $listaEditoraSql->num_rows;

    $listaAutorEspSql = mysqli_query($conn, "SELECT * FROM tb_autorespiritual aut  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaAutorEspSql");
    $listaAutorEsp = $listaAutorEspSql->num_rows;

    $listaPsicografoSql = mysqli_query($conn, "SELECT * FROM tb_psicografo psi  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaPsicografoSql");
    $listaPsicografo = $listaPsicografoSql->num_rows;

    $listaPesquisadorSql = mysqli_query($conn, "SELECT * FROM tb_pesquisador pesq  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaPesquisadorSql");
    $listaPesquisador = $listaPesquisadorSql->num_rows;
?>