<!doctype html>
<html>
  <head>
  <?php include('./tpl/head.php') ?>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Avontz">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property=”og:image” content=”https://saintmc.com.br/img/logo-128px.png“/>
    <title>Daniel Fontanetti</title>
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
  </head>
  <body style="margin-right: 10px;">
  <a href="#" id="backtotop"></a>
  <div id="scrollPath"></div>
  <div id="progressbar"></div>
 
  <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container text-center mr-auto burger-div">
            <ul class="mr-auto"></ul>
            <ul class="navbar-nav mr-auto">
            <li class="nav-item text-center my-auto"><div id="burger" onclick="burgerAnimation()" class="burger burger-squeeze burger-right navbar-toggle" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <div class="burger-lines"></div>
            </div></li>
        </div>
        <div class="collapse navbar-collapse" id="navigation">
          <div class="container">
              <ul class="mr-auto"></ul>
              <ul class="navbar-nav mr-auto">
                      <li class="nav-item text-center my-auto active"><a href="/pt-br/" class="my-auto nav-link navbar-links text-uppercase">Início <span class="sr-only">(current)</span></a></li>
                      <li class="nav-item text-center my-auto"><a href="./videos" class="my-auto nav-link navbar-links text-uppercase">Vídeos</a></li>
                      <li class="nav-item text-center my-auto logo-li" data-aos="zoom-out-down"><img src="./img/logo350px.png" alt="Logo" height="80px"></li>
                      <li class="nav-item text-center my-auto"><a href="./fotos" class="my-auto nav-link navbar-links text-uppercase">Fotos</a></li>
                      <li class="nav-item text-center my-auto"><a href="./contato" class="my-auto nav-link navbar-links text-uppercase">Contato</a></li>
                  </ul>
          </div>
        </div>
      </nav>
  <div class="container content-start">
  <h1 class="videos-title text-center content-start">Vídeos</h1>
  </div>
  <?php

  $url = "./videos.json";
  $json = file_get_contents($url);
  $dado = json_decode($json, true);
  $lista = -1;
  $tamanho = count($dado) -1;

  while ($lista < $tamanho) {
    $lista++; 
  ?>
  <?php 
    if ($lista % 2 === 0) {
  ?>
  <div class="container content-start">
    <div class="row">
      <div class="col-md-6 video-placement text-center" data-aos="fade-down">
        <iframe loading="lazy" width="100%" src="<?php echo $dado[$lista]['url']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col-md-6 my-auto video-details" data-aos="fade-left">
          <h2 class="video-title"><?php echo $dado[$lista]['title']?></h2>
          <p class="text-justify"><?php echo $dado[$lista]['desc']?></p>
      </div>
    </div>
  </div>

  <?php } else { ?>

  <div class="container content-start">
    <div class="row">
      <div class="col-md-6 my-auto video-details display-v-details-before" data-aos="fade-right">
          <h2 class="video-title"><?php echo $dado[$lista]['title']?></h2>
          <p class="text-justify"><?php echo $dado[$lista]['desc']?></p>
      </div>
      <div class="col-md-6 video-placement text-center" data-aos="fade-up">
        <iframe loading="lazy" width="100%" src="<?php echo $dado[$lista]['url']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col-md-6 my-auto video-details display-v-details-after" data-aos="fade-right">
          <h2 class="video-title"><?php echo $dado[$lista]['title']?></h2>
          <p class="text-justify"><?php echo $dado[$lista]['desc']?></p>
      </div>
    </div>
  </div>

  <?php } ?>
<?php } ?>

<?php include('./tpl/footer.php') ?>  

  <?php include('./tpl/scripts.php') ?>  
  </body>
</html>