<!DOCTYPE html>
<html lang="pt-br">
  
<?php
$page_name = "Lista Editora";

include 'api/api-post.php';

include 'header.php';

$json_str = json_decode($api_posts, true);
?>

<section id="publicidade-1">
  <?php include 'publicidade.html' ?>
</section>

<section id="search-content" class="container mt-5">
  <div class="row">
    <div class="col-12 col-xl-6 text-center text-xl-right d-flex align-items-center">
      <h1 class="Montserrat-Bold text-dark w-100">+ CULTURA</h1>
    </div>
    <div class="col-12 col-xl-6">
      <div class="col-12 col-xl-10">
        <p class="text-center text-xl-left SourceSerifPro-Bold">
          Lorem ipsum dolor sit amet, consectetur adiscing elit aliqua. Vivamus eget dui mi. In eleifend consectetur ultrices. Sed scelerisque nisl tempus felis. In eleifend consectetur ultrices.
        </p>
      </div>
    </div>
    <div class="col-12">
      <hr>
    </div>
    <div class="col-12 mt-5 mb-5">
      <form action="/" method="post" class="d-flex align-items-center justify-content-center">
        <input placeholder="Busca por conteúdo nesta seção" type="text" class="input-editora">
        <button type="button" class="btn bg-white">
          <i class="bi bi-search h4"></i>
        </button>
      </form>
    </div>
  </div>
</section>

<section id="content-posts" class="container mt-5 position-relative">
  <div class="row posts-container mt-785" id="posts-container">
    <?php
    $h = 1;
    foreach ($json_str['data']['posts'] as $e) {
      if ($h > 3) {
        $h = 1;
      } ?>
      <article class="col-12 col-xl-4 content-blocos mt-4">
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
    }
    ?>
  </div>
  <div class="sombra"></div>
  <div class="col-12 mt-5 mb-5">
    <div class="d-flex justify-content-center align-items-center">
      <h4 id="vermais">MAIS MATÉRIAS</h4>
    </div>
  </div>
</section>

<?php include 'newsletter.html'; ?>
<?php include 'footer.html'; ?>
</body>

</html>