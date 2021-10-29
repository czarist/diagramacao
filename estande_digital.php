<!DOCTYPE html>
<html lang="pt-br">
<?php

$page_name = "Estande Digital";

include 'api/api-livros.php';

include 'header.php';

$json_str = json_decode($api_posts, true); ?>

<section id="publicidade-1">
  <?php include 'publicidade.html' ?>
</section>

<section id="the_content" class="container mt-5 text-left">
  <div class="row">
    <div style="background-image: url('libraries/img/4.jpg');" class="col-12 fundo-capa">

    </div>
    <div class="col-12">
      <div class="d-flex text-center align-items-center justify-content-center">
        <h4 class="border SourceSerifPro-Light border-dark titulo-stande">
          ESTANTE DIGITAL
        </h4>
      </div>
    </div>
    <div class="col-12 col-xl-9">
      <h1 class="text-left">lorem ipsum dolor sit amet, consectetur adpispt
      </h1>
      <div class="d-flex text-center align-items-center justify-content-center">

      </div>
      <a class="text-dark text-center mb-5 w-100" href="#">
        <h6 class="mt-2 mb-2 text-left w-100 fs-12 mb-5">
          <ins>JOÃO DA SILVA | AGÊNCIA EINSTEIN</ins>
        </h6>
      </a>
      <p class="recuo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas mollis dui, sed euismod metus varius at. Integer vestibulum, arcu at vestibulum molestie, tortor nisi vehicula orci, nec ullamcorper enim nulla vel sem. Nullam consectetur augue ac felis rutrum ullamcorper. Donec luctus eleifend est, non ullamcorper est mattis ac. In efficitur purus vitae placerat aliquet. In hac habitasse platea dictumst. Sed fringilla sapien massa, at cursus nulla dignissim nec. Fusce velit elit, pharetra eget nulla ullamcorper, lacinia laoreet dolor. Vivamus fringilla maximus venenatis. Nullam vitae venenatis nulla. Mauris cursus ligula velit, sit amet placerat sem vehicula in. Suspendisse posuere nec purus a lobortis. Proin ut sapien sit amet sem bibendum vulputate sit amet vitae quam.
      </p>
      <p class="recuo">Maecenas a mi pellentesque, hendrerit nunc at, vestibulum ante. Donec bibendum scelerisque rhoncus. Fusce tincidunt pulvinar mattis. Nunc ac pharetra augue. Nulla nec nisi vitae augue venenatis ornare. Sed ultricies arcu sed lectus commodo lacinia. Etiam suscipit a leo id semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam in ligula et urna consectetur pretium sed a tellus. Nam augue nunc, facilisis non odio vitae, sagittis dictum ipsum. Maecenas non nibh eget lectus viverra cursus. Integer hendrerit tincidunt tellus a dignissim. Nam pellentesque vulputate sollicitudin. Sed et mauris et mauris scelerisque aliquet. Duis rhoncus lacinia mauris sit amet ornare. 
      </p>
    </div> 
    <div class="col-12 col-xl-3">
      <div class="d-flex w-100 justify-content-center align-items-center flex-column">
        <h4 class="border w-100 text-center SourceSerifPro-Light border-dark p-2">
          Livro do mês
        </h4>
        <img class="w-100" src="libraries/img/livro.png" alt="livro">
        <span class="mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas mollis dui, sed euismod metus varius at. </span>
      </div>
    </div>
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

<section id="content-posts" class="container mt-5 mb-5">
  <hr>
  <h4 class="text-center text-xl-left conhecer-content-posts SourceSerifPro-Light">
    OUTROS TÍTULOS ADICIONADOS À NOSSA ESTANTE:
  </h4>
  <div class="livro-container swiper-container-livros" id="livro-container">
    <div class="swiper-wrapper">
      <?php
      $h = 1;
      foreach ($json_str['data']['livros'] as $e) {
        if ($h > 3) {
          $h = 1;
        }
      ?>
        <article class="content-livro swiper-slide">
          <div class="content-livro-padrao mt-4">
            <img width="110" height="170" src="<?php echo $e['url_imagem']; ?>" alt="livro">
            <h6 class="text-center p-3 Montserrat-Bold"><?php echo $e['titulo']; ?></h6>
            <span><?php echo $e['autor']; ?></span>
          </div>
        </article>
      <?php
        ++$h;
      }
      ?>
    </div>
  </div>
</section>

<?php include 'newsletter.html'; ?>
<?php include 'footer.html'; ?>
</body>

</html>