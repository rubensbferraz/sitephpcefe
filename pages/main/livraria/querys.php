<?php 
    /*$listaTesteSql = mysqli_query($conn, "SELECT t.idtb_teste, t.texto FROM tb_teste t, tb_teste2 t2;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaTesteSql");
    $listaTeste = $listaTesteSql->num_rows;*/

    $listaSql = mysqli_query($conn, "SELECT t.id, t.titulo, t.descricao, t.edicao, t.dtPublicacao, t.isbn, t.preco, t.id_editora, t.id_tipoObra FROM tb_titulo t;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaSql");
    $lista = $listaSql->num_rows;

    $listaEdSql = mysqli_query($conn, "SELECT id, editora, sigla FROM tb_editora  ;") or die("mysql error:" . mysqli_error($conn)."<hr>\nQuery: $listaEdSql");
    $listaEd = $listaEdSql->num_rows;

    //trabalhado com a tabela Pesquisador
    $naomediunicoSql = mysqli_query($conn, "SELECT nm.id, nm.id_tipoobra, nm.id_pesquisador , p.id, p.pesquisador from tb_pesquisador p 
    inner join tb_naomediunico nm on p.id=nm.id_pesquisador")or die("mysql error:" . $naomediunicoSql . "<br>" . mysqli_error($conn));
    $listanaomediunico = $naomediunicoSql->num_rows;

    //trabalhando com a tabela Psicografo
    $mediunicaSql = mysqli_query($conn, "SELECT m.id, m.id_tipoobra, m.id_psicografo , psi.id, psi.psicografo from tb_mediunica m
    inner join tb_psicografo psi on m.id=psi.id")or die("mysql error:" . $mediunicaSql . "<br>" . mysqli_error($conn));
    $listamediunica = $mediunicaSql->num_rows;

    //trabalhando com a tabela Autor Espiritual
    $listaAutSql = mysqli_query($conn, "SELECT aut.id, aut.espiritoAutor, aut.id_psicografo , psi.id, psi.psicografo 
    FROM tb_psicografo psi
    inner join tb_autorespiritual aut on 
    psi.id=aut.id_psicografo") or die("mysql error:" . $listaAutSql . "<br>" . mysqli_error($conn));
    $listaAut =$listaAutSql->num_rows;
    //inner join tb_psicografo on tb_autorespiritual.id_psicografo = tb_psicografo.id

    $listaTipoSql = mysqli_query($conn, "SELECT tipo.id, tipo.tipoObra FROM tb_tipoobra tipo;") or die("mysql error:" . $listaTipoSql . "<br>" . mysqli_error($conn));
    $listaTipo =$listaTipoSql->num_rows;

    $listaPesqSql = mysqli_query($conn, "SELECT pesq.id, pesq.pesquisador FROM tb_pesquisador pesq;") or die("mysql error:" . $listaPesqSql . "<br>" . mysqli_error($conn));
    $listaPesq = $listaPesqSql->num_rows;

    $listaPsiSql = mysqli_query($conn, "SELECT psi.id, psi.psicografo FROM tb_psicografo psi;") or die("mysql error:" . $listaPsiSql . "<br>" . mysqli_error($conn));
    $listaPsi = $listaPsiSql->num_rows;

//navegação menu horizontal



   ?>