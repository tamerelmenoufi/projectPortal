<?php

if($_GET['cod']){
  $query = "select * from banners where codigo = '{$_GET['cod']}'";
}else{
  $query = "select * from banners where situacao = '1' limit 1";
}
  $result = mysqli_query($con, $query);
  $d = mysqli_fetch_object($result);
?>
<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="<?=$localPainel?>src/volume/banners/<?=$d->imagem?>" class="img-fluid animated">
      <h2><?=$d->titulo?> <!-- <span>HeroBiz</span> --></h2>
      <p><?=$d->descricao?></p>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section>