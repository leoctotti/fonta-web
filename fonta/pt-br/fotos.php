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
 
 <?php include('./tpl/nav.php') ?>

<div class="container content-start">
<h1 class="photos-title text-center content-start">Fotos</h1>
</div>

  <div class="container content-start">
    <div class="card-columns">
      <?php
      $handle = opendir(dirname(realpath(__FILE__)).'../../content/photos/');
      while($file = readdir($handle)){
        if($file !== '.' && $file !== '..'){
          echo '<div class="card text-center img-placement"><a><img loading="lazy" class="rounded card-img-top" src="../../content/photos/'.$file.'" width="100%" /></a></div>';
        }
      }
      ?>
    </div>
  </div>


 <?php include('./tpl/footer.php') ?>  

  <?php include('./tpl/scripts.php') ?>  
  </body>
</html>