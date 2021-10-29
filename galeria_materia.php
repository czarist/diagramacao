<!DOCTYPE html>
<html lang="pt-br">

<?php

$page_name = "Galeria Materia";

include 'api/api-livros.php';

include 'header.php';

$json_str = json_decode($api_posts, true); ?>

<section id="publicidade-1">
  <?php include 'publicidade.html' ?>
</section>

<section id="the_content" class="container mt-5">
  <div class="row">
    <div class="col-xl-1"></div>
    <div class="col-xl-10 col-12 overflow-hidden">
      <h1 class="text-center">
        Lorem ipsum dolor sit amet, consectetur adiscing elit aliqua.
      </h1>
      <p class="recuo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas mollis dui, sed euismod metus varius at. Integer vestibulum, arcu at vestibulum molestie, tortor nisi vehicula orci, nec ullamcorper enim nulla vel sem. Nullam consectetur augue ac felis rutrum ullamcorper. Donec luctus eleifend est, non ullamcorper est mattis ac. In efficitur purus vitae placerat aliquet. In hac habitasse platea dictumst. Sed fringilla sapien massa, at cursus nulla dignissim nec. Fusce velit elit, pharetra eget nulla ullamcorper, lacinia laoreet dolor. Vivamus fringilla maximus venenatis. Nullam vitae venenatis nulla. Mauris cursus ligula velit, sit amet placerat sem vehicula in. Suspendisse posuere nec purus a lobortis. Proin ut sapien sit amet sem bibendum vulputate sit amet vitae quam.
      </p>
      <div class="position-relative">
        <img id="imagem_principal_galeria" class="w-100" src="" alt="imagem">
        <div id="load-animation" class="loadingio-spinner-eclipse-8zvcousbjjf d-none">
          <div class="ldio-tf0g4c0rbpe">
            <div></div>
          </div>
        </div>
      </div>
      <div class="swiper-galeria mt-5 position-relative">
        <div class="swiper-wrapper">
          <?php
          for ($x = 1; $x <= 7; $x++) {
          ?>
            <div class="swiper-slide d-flex align-items-center justify-content-center">
              <div class="img-galeria" style="background-image: url('libraries/img/<?= $x ?>.jpg');"></div>
            </div>
          <?php
          }
          ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
      <p class="recuo mt-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas mollis dui, sed euismod metus varius at. Integer vestibulum, arcu at vestibulum molestie, tortor nisi vehicula orci, nec ullamcorper enim nulla vel sem. Nullam consectetur augue ac felis rutrum ullamcorper. Donec luctus eleifend est, non ullamcorper est mattis ac. In efficitur purus vitae placerat aliquet. In hac habitasse platea dictumst. Sed fringilla sapien massa, at cursus nulla dignissim nec. Fusce velit elit, pharetra eget nulla ullamcorper, lacinia laoreet dolor. Vivamus fringilla maximus venenatis. Nullam vitae venenatis nulla. Mauris cursus ligula velit, sit amet placerat sem vehicula in. Suspendisse posuere nec purus a lobortis. Proin ut sapien sit amet sem bibendum vulputate sit amet vitae quam.
      </p>
      <iframe class="mt-5" width="1191" height="670" src="https://www.youtube.com/embed/N30UlM40smY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-xl-1"></div>
  </div>
</section>

<section id="compartilhe" class="mt-5 mb-5 container">
  <div class="row">
    <div class="col-12">
      <h4 class="text-muted text-center SourceSerifPro-Light">COMPARTILHE:</h4>
    </div>
    <div class="col-12 icons d-flex justify-content-center align-items-center">
      <a href="#" class="text-dark mr-1 ml-1 h2">
        <i class="fab fa-pinterest-p"></i>
      </a>
      <a href="#" class="text-dark mr-1 ml-1 h2">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="#" class="text-dark mr-1 ml-1 h2">
        <i class="fab fa-whatsapp"></i>
      </a>
    </div>
  </div>
</section>

<?php include 'newsletter.html'; ?>

<?php include 'footer.html'; ?>
</body>

</html>