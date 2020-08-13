<?php  $base = 'sitephpcefe'; 
  session_start();
  //session_destroy();
  //print_r($_SESSION);
?>

<nav id="navego" class="navbar navbar-light  row d-inline-block ml-1 p-2";>
  <a class="btn btn-light text-center p-2" href="<?php $conn ?>/<?php echo $base ?>/">Home
    <img src= "<?php $conn ; ?>/<?php echo $base ;?>/imagens/navegacaoDireita.png" width="25"  alt="">
  </a>
  <?php if($_SESSION['navegar']=="palestra"):?>
    <a class="btn btn-light text-center p-2" href="palestra.php">Cadastro Palestra
      <img src="<?php $conn ?>/<?php echo $base ?>/imagens/navegacaoDireita.png" width="25"  alt="">
    </a>
  <?php elseif($_SESSION['navegar']=="titulo"):?>
      <a class="btn btn-light text-center p-2" href="cadastroTitulo.php">Cadastro Titulos
        <img src="<?php $conn ?>/<?php echo $base ?>/imagens/navegacaoDireita.png" width="25"  alt="">
      </a>
  <?php endif; ?>

</nav>