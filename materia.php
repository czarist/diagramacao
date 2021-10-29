<!DOCTYPE html>
<html lang="pt-br">
<?php

$page_name = "Matéria";

include 'api/api-post.php';

include 'header.php';

$json_str = json_decode($api_posts, true); ?>

<section id="publicidade-1">
  <?php include 'publicidade.html' ?>
</section>

<section id="the_content" class="container mt-5 text-left">
  <div class="row">
    <div class="col-12">
      <div class="d-flex text-center align-items-center justify-content-center">
        <h4 class="border SourceSerifPro-Light border-dark pt-2 pb-2 pr-4 pl-4">
          In eleifend consectetur ultrices
        </h4>
      </div>
    </div>
    <div class="col-1 col-xl-2"></div>
    <div class="col-10 col-xl-8">
      <h1 class="text-center">lorem ipsum dolor sit amet, consectetur adpispt
      </h1>
      <div class="d-flex text-center align-items-center justify-content-center">
        <div class="col-10">
          <h5 class="text-center SourceSerifPro-Light">Vivamus eget dui mi. In eleifend consectetur ultrices. Sed scelerisque nisl tempus felis.In eleifend consectetur ultrices. Sed scelerisque nisl tempus felis
          </h5>
        </div>
      </div>
      <img class="mw-100 mt-5 mb-2" src="libraries/img/6.jpg" alt="capa">
      <a class="text-dark text-center mb-5 w-100" href="#">
        <h6 class="mt-2 mb-2 text-center w-100 fs-12">
          <ins>JOÃO DA SILVA | AGÊNCIA EINSTEIN</ins>
        </h6>
      </a>
      <p class="recuo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas mollis dui, sed euismod metus varius at. Integer vestibulum, arcu at vestibulum molestie, tortor nisi vehicula orci, nec ullamcorper enim nulla vel sem. Nullam consectetur augue ac felis rutrum ullamcorper. Donec luctus eleifend est, non ullamcorper est mattis ac. In efficitur purus vitae placerat aliquet. In hac habitasse platea dictumst. Sed fringilla sapien massa, at cursus nulla dignissim nec. Fusce velit elit, pharetra eget nulla ullamcorper, lacinia laoreet dolor. Vivamus fringilla maximus venenatis. Nullam vitae venenatis nulla. Mauris cursus ligula velit, sit amet placerat sem vehicula in. Suspendisse posuere nec purus a lobortis. Proin ut sapien sit amet sem bibendum vulputate sit amet vitae quam.
      </p>
      <p class="recuo">Maecenas a mi pellentesque, hendrerit nunc at, vestibulum ante. Donec bibendum scelerisque rhoncus. Fusce tincidunt pulvinar mattis. Nunc ac pharetra augue. Nulla nec nisi vitae augue venenatis ornare. Sed ultricies arcu sed lectus commodo lacinia. Etiam suscipit a leo id semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam in ligula et urna consectetur pretium sed a tellus. Nam augue nunc, facilisis non odio vitae, sagittis dictum ipsum. Maecenas non nibh eget lectus viverra cursus. Integer hendrerit tincidunt tellus a dignissim. Nam pellentesque vulputate sollicitudin. Sed et mauris et mauris scelerisque aliquet. Duis rhoncus lacinia mauris sit amet ornare.
      </p>
      <div class="mt-5 mb-5">
        <?php include 'publicidade.html' ?>
      </div>
      <div class="row mt-5 mb-5">
        <p class="col-12 col-xl-6 recuo">Maecenas malesuada est purus, eu blandit lectus facilisis vitae. Ut cursus scelerisque enim eget faucibus. Suspendisse laoreet sagittis orci, nec congue dolor vulputate nec. Cras nulla mauris, rutrum vitae accumsan quis, gravida a est. <b>Nulla egestas suscipit</b> velit, eu pulvinar turpis dictum congue. Nunc ac turpis tristique, libero aliquam. Nullam sit amet nisl vel lorem tempor porta. Maecenas a pharetra lectus. Duis id mattis lacus, sit amet rutrum est. Quisque eu elementum metus. Nam tristique nisi sed mauris vulputate, a lacinia enim rutrum. Nunc bibendum, neque eget semper fringilla, <b>metus arcu porttitor dui, et ultrices lacus turpis ut elit.</b>
        </p>
        <div class="col-12 col-xl-6">
          <img class="mw-100" src="libraries/img/4.jpg" alt="foto">
          <span class="text-muted">Idinus lcas non focus</span>
        </div>
      </div>
      <p class="recuo">
        Donec non lacus enim. Duis finibus placerat lectus nec semper. Etiam nec tempor mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur fringilla arcu vitae varius pellentesque. Vestibulum elementum diam varius rutrum placerat. Mauris porta sem et lacinia hendrerit. Aliquam ac ipsum finibus, eleifend nisl at, gravida eros. Aenean nec enim nunc. Praesent faucibus varius dolor, nec tincidunt metus mollis eu. Curabitur lacus lectus, laoreet sed consequat vel, egestas vel elit. Vestibulum nunc nisl, varius in velit a, ultricies mattis purus. Curabitur facilisis augue vel lectus hendrerit, vel commodo eros cursus. In sollicitudin, ipsum eget consequat cursus, lectus leo aliquam tortor, ac facilisis velit lorem quis lacus.
      </p>

    </div>
    <div class="col-1 col-xl-2"></div>
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
  <h4 class="text-center text-xl-left conhecer-content-posts SourceSerifPro-Light">VAMOS CONHECER OUTROS BONS EXEMPLOS?</h4>
  <div class="row posts-container" id="posts-container">
    <?php
    $h = 1;
    $i = 1;
    foreach ($json_str['data']['posts'] as $e) {
      if ($h > 3) {
        $h = 1;
      }
      if ($i == 4) {
        break;
      } ?>
      <article class="col-12 col-xl-4 content-blocos">
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="<?= $h ?>000" class="content-bloco-padrao mt-4">
          <div class="bloco-padrao" style="background-image: url('<?php echo $e['url_imagem']; ?>')">
            <a class="content-sub" href="#">
              <?php echo $e['indicador']; ?>
            </a>
          </div>
          <h4 class="mt-4">
            <?php echo $e['titulo']; ?>
          </h4>
          <p>
            <?php echo $e['texto']; ?>
          </p>
          <a class="author-bloco" href="#">
            <?php echo $e['autor']; ?>
          </a>
        </div>
      </article>
    <?php
      ++$h;
      ++$i;
    }
    ?>
  </div>
</section>

<?php include 'newsletter.html'; ?>

<?php include 'footer.html'; ?>
</body>

</html>