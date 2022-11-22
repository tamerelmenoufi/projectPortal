<?php

if($_GET['cod']){
  $query = "select * from banners where codigo = '{$_GET['cod']}'";
}else{
  $query = "select * from banners where situacao = '1' limit 1";
}
  $result = mysqli_query($con, $query);
  $d = mysqli_fetch_object($result);
?>

    <div class="col-md-12" data-aos="">
      <img src="<?=$localPainel?>src/volume/banners/<?=$d->imagem?>" class="img-responsive" style="width:100%;margin-top:25px">
      </div>
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2><?=$d->titulo?></h2>
          <p><?=$d->descricao?></p>
      
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
      </div>
     

    
  