<!DOCTYPE html>
<html lang="pt-br">
<?php

$page_name = "Galeria Lista";

include 'api/api-livros.php';

include 'header.php';

$json_str = json_decode($api_posts, true); ?>

<section id="publicidade-1">
  <?php include 'publicidade.html' ?>
</section>

<section id="the_content" class="container mt-5 text-left">
  <div class="row">
    <div style="background-image: url('libraries/img/7.jpg');" class="col-12 fundo-capa">

    </div>
    <div class="col-12">
      <div class="d-flex text-center align-items-center justify-content-center">
        <h4 class="border SourceSerifPro-Light border-dark titulo-stande">
          GALERIAS
        </h4>
      </div>
    </div>
    <div id="posts-container" class="col-12 col-xl-9 posts-container mt-785">
      <?php
      for ($x = 1; $x <= 15; $x++) {
        if ($y === null || $y > 5) {
          $y = 1;
        }
      ?>
        <div class="row mb-5">
          <div class="col-xl-4 col-12">
            <div class="img-galerias" style="background-image: url('libraries/img/quadros/<?= $y++ ?>.jpg');"></div>
          </div>
          <div class="col-xl-8 col-12">
            <h4>Maecenas a mi pellentesque, hendrerit nunc at, vestibulum ante. Donec bibendum scelerisque rhoncus. Fusce tincidunt pulvinar mattis. Nunc ac pharetra augue. </h4>
          </div>
        </div>
      <?php
      }
      ?>
    </div>

    <div class="col-12 col-xl-3">
      <div class="d-flex w-100 justify-content-center align-items-center flex-column">
        <h4 class="Montserrat-Bold text-center">Nós respiramos cultura + arte</h4>
        <span class="mt-1 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas mollis dui, sed euismod metus varius at. </span>
        <a class="mt-1 Montserrat-Bold" href="#">
          <h6 class="border w-100 text-dark text-center border-dark p-2">
            GOSTARIA DE DIVULGAR MEU TRABALHO
          </h6>
        </a>
      </div>
    </div>
  </div>
  <div class="sombra"></div>
  <div class="col-12 mt-5 mb-5">
    <div class="d-flex justify-content-center align-items-center">
      <h4 id="vermais">MAIS GALERIAS</h4>
    </div>
  </div>
</section>

<?php include 'newsletter.html'; ?>
<?php include 'footer.html'; ?>
</body>

</html>