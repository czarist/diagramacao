<!DOCTYPE html>
<html lang="pt-br">
<?php $page_name = "Contato"; ?>
<?php include 'header.php' ?>

<section id="publicidade-1">
  <?php include 'publicidade.html' ?>
</section>

<section id="contato" class="mt-5">
  <div class="container">
    <div class="row mt-5">
      <div class="col-12 ">
        <h2 class="text-dark text-left Montserrat-Bold">
          Lorem ipsum dolor sit amet, consectetur
        </h2>
        <p class="text-dark text-left Montserrat-Light">
          Vivamus eget dui mi. In eleifend consectetur ultrices. Sed scelerisque nisl tempus felis dictum, ac ultrices leo feugiat. Vestibulum et pellentesque eros.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <form class="mt-5" action="#" method="post">
          <div class="row">
            <div class="col-12 col-xl-6">
              <input type="text" name="nome" placeholder="Nome" id="nome">
            </div>
            <div class="col-12 col-xl-6">
              <input type="email" name="email" placeholder="E-mail" id="email">
            </div>
            <div class="col-12 col-xl-6">
              <input type="text" name="telefone" placeholder="Telefone" id="telefone">
            </div>
            <div class="col-12 col-xl-6">
              <input type="text" name="cidade" placeholder="Cidade" id="cidade">
            </div>
            <div class="col-12">
              <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Mensagem"></textarea>
              <div class="w-100 d-flex justify-content-xl-end justify-content-center mt-4">
                <button class="botao-enviar-contato">Enviar</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'newsletter.html'; ?>
<?php include 'footer.html'; ?>
</body>

</html> 