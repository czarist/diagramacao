<!DOCTYPE html>
<html lang="pt-br">
<?php

$page_name = "Sobre";

include 'api/api-post.php';

include 'header.php';

$json_str = json_decode($api_posts, true); ?>

<section id="publicidade-1">
  <?php include 'publicidade.html' ?>
</section>

<section id="the_content" class="container mt-5 text-left">
  <div class="row">
    <div class="col-12 col-xl-8">
      <h1>lorem ipsum dolor sit amet, consectetur adpispe</h1>
      <p class="recuo mt-5"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas mollis dui, sed euismod metus varius at. Integer vestibulum, arcu at vestibulum molestie, tortor nisi vehicula orci, nec ullamcorper enim nulla vel sem. Nullam consectetur augue ac felis rutrum ullamcorper. Donec luctus eleifend est, non ullamcorper est mattis ac. In efficitur purus vitae placerat aliquet. In hac habitasse platea dictumst. Sed fringilla sapien massa, at cursus nulla dignissim nec. Fusce velit elit, pharetra eget nulla ullamcorper, lacinia laoreet dolor. Vivamus fringilla maximus venenatis. Nullam vitae venenatis nulla. Mauris cursus ligula velit, sit amet placerat sem vehicula in. Suspendisse posuere nec purus a lobortis. Proin ut sapien sit amet sem bibendum vulputate sit amet vitae quam.
      </p>
    </div>
    <div class="col-12 col-xl-4">
      <img class="w-100" src="libraries/img/9.jpg" alt="imagem-sobre">
      <span class="text-muted">In efficitur purus vitae placerat aliquet</span>
    </div>
    <div class="col-12">
      <p class="recuo"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas mollis dui, sed euismod metus varius at. Integer vestibulum, arcu at vestibulum molestie, tortor nisi vehicula orci, nec ullamcorper enim nulla vel sem. Nullam consectetur augue ac felis rutrum ullamcorper. Donec luctus eleifend est, non ullamcorper est mattis ac. In efficitur purus vitae placerat aliquet. In hac habitasse platea dictumst. Sed fringilla sapien massa, at cursus nulla dignissim nec. Fusce velit elit, pharetra eget nulla ullamcorper, lacinia laoreet dolor. Vivamus fringilla maximus venenatis. Nullam vitae venenatis nulla. Mauris cursus ligula velit, sit amet placerat sem vehicula in. Suspendisse posuere nec purus a lobortis. Proin ut sapien sit amet sem bibendum vulputate sit amet vitae quam.
      </p>
    </div>
  </div>
</section>

<?php include 'newsletter.html'; ?>

<?php include 'footer.html'; ?>
</body>

</html>