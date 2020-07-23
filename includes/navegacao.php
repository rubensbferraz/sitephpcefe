<?php  $base = 'sitephpcefe'; 
  session_start();
  $t = 'titulo';
  $p = 'palestra'; 
  $sessao = session_id($t.$p);
?>

<nav id="navego" class="navbar navbar-light  row d-inline-block ml-1 p-2";>
  <a class="btn btn-light text-center p-2" href="<?php $conn ?>/<?php echo $base ?>/">Home
    <img src= "<?php $conn ; ?>/<?php echo $base ;?>/imagens/navegacaoDireita.png" width="25"  alt="">
  </a>
  <?php if($sessao==$p):?>
    <a class="btn btn-light text-center p-2" href="palestra.php">Cadastro Palestra
      <img src="<?php $conn ?>/<?php echo $base ?>/imagens/navegacaoDireita.png" width="25"  alt="">
    </a>
  <?php else:?>
      <a class="btn btn-light text-center p-2" href="cadastroTitulo.php">Cadastro Titulos
        <img src="<?php $conn ?>/<?php echo $base ?>/imagens/navegacaoDireita.png" width="25"  alt="">
      </a>
  <?php endif; ?>

</nav>