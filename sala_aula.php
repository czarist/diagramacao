<!DOCTYPE html>
<html lang="pt-br">
<?php

$page_name = "Sala Aula";

include 'api/api-livros.php';

include 'header.php';

$json_str = json_decode($api_posts, true); ?>

<section id="publicidade-1">
  <?php include 'publicidade.html' ?>
</section>

<section id="the_content" class="container mt-5 text-left">
  <div class="row">
    <div style="background-image: url('libraries/img/1.jpg');" class="col-12 fundo-capa"></div>

    <div class="col-12">
      <div class="d-flex text-center align-items-center justify-content-center">
        <h4 class="border SourceSerifPro-Light border-dark titulo-stande">
          SALA DE AULA
        </h4>
      </div>
    </div>

    <div class="col-12 mb-5">
      <div class="row">
        <div class="col-xl-4 col-12 mt-3">
          <form action="#">
            <span class="Montserrat-Light">Buscar curso:</span>
            <input class="w-50 input_sala" type="text">
            <span><i class="bi bi-search"></i></span>
          </form>
        </div>
        <div class="col-xl-4 col-12 mt-3"></div>
        <div class="col-xl-4 col-12 mt-3">
          <span class="Montserrat-Light">ordernar por:</span>
          <select class=" Montserrat-Bold form-select border border-light bg-white" aria-label="Default select example">
            <option selected>Selecione uma opção</option>
            <option value="1">Mais recentes primeiro</option>
            <option value="2">Mais antigos ultimos</option>
            <option value="3">Mais relevantes</option>
          </select>
        </div>
      </div>
    </div>

    <div id="posts-container" class="col-12 posts-container">
      <?php
      for ($x = 1; $x <= 15; $x++) {
        if ($y === null || $y > 5) {
          $y = 1;
        }
      ?>
        <div class="row mb-5 align-items-center">
          <div class="col-xl-3 col-12">
            <div class="img-galerias" style="background-image: url('libraries/img/quadros/<?= $y++ ?>.jpg');"></div>
          </div>
          <div class="col-xl-6 col-12 m-xl-0 mb-4">
            <h4 class="Montserrat-Bold">Maecenas a mi pellentesque, hendrerit nunc at. </h4>
            <span class="SourceSerifPro-Light">Gratuíto</span>
          </div>
          <div class="col-xl-3 col-12">
            <a class="SourceSerifPro-Bold informacoes_sala m-0 border border-dark text-dark pl-4 pr-4 pt-2 pb-2" href="#">Mais informações</a>
          </div>
          <hr class="border border-secondary w-100 opacity-25">
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</section>

<?php include 'newsletter.html'; ?>
<?php include 'footer.html'; ?>
</body>

</html>