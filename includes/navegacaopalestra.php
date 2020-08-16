<?php 
 session_start();
 $base = 'sitephpcefe';
 ob_start();
 $palestra = $_SESSION['palestra'] == "palestra";
?>



<nav id="navego" class="navbar navbar-light  row d-inline-block ml-1 p-2";>
  <a class="btn btn-light text-center p-2" href="<?php $conn ?>/<?php echo $base ?>/">Home
    <img src= "<?php $conn ; ?>/<?php echo $base ;?>/imagens/navegacaoDireita.png" width="25"  alt="">
  </a>
  <?php if(isset($palestra)) {?>
    <a class="btn btn-light text-center p-2" href="palestra.php">Cadastro Palestra
      <img src="<?php $conn ?>/<?php echo $base ?>/imagens/navegacaoDireita.png" width="25"  alt="">
    </a>
  <?php }?>
</nav>




  


