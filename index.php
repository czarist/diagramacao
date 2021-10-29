<!DOCTYPE html>
<html lang="pt-br">
<?php $page_name = "Home"; ?>
<?php include 'header.php' ?>

<!-- conteúdo do pop-up é inserido com javascript -->
<section class="d-none" id="outside-popup">
  <div class="pop-up p-4">
    <div class="d-flex justify-content-between">
      <span class="SourceSerifPro-Light" id="cidade-popup"></span>
      <div class="d-flex">
        <h4 class="SourceSerifPro-Bold h3" id="data-popup"></h4>
        <i class="fas fa-share d-flex justify-content-center align-items-center h4"></i>
      </div>
    </div>
    <h1 class="Montserrat-Bold" id="titulo-popup"></h1>
    <p id="texto-popup"></p>
    <p>
      <b>Onde: </b>
      <span id="onde-popup"></span>
    </p>
    <p>
      <b>Quando:</b>
      <span id="quando-popup"></span>
    </p>
    <p>
      <b>Que horas?</b>
      <span id="horas-popup"></span>
    </p>
    <div onclick="closepopup();" id="close-popup">
      <i class="bi bi-x-lg"></i>
    </div>
    <hr>
    <div class="d-flex justify-content-center align-items-center flex-column">
      <h6 id="categoria" class="mb-3 SourceSerifPro-Bold">Categoria</h6>
      <div id="triangulo-popup"></div>
    </div>
  </div>
</section>
<!-- fim pop-up -->

<section id="publicidade-1">
  <?php include 'publicidade.html' ?>
</section>

<section id="bloco-superior" class="mt-5 mb-5">
  <div class="container">
    <div class="row">
      <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="col-12 col-xl-7">
        <div class="col-12">
          <div class="content-imagem-capa">
            <div class="imagem-capa" style="background-image: url('libraries/img/6.jpg')">
              <a class="content-sub" href="#">Excepteur sint occaecat</a>
            </div>
            <h2 class="mt-4">
              Lorem ipsum dolor sit amet, consectetur adiscing elit aliqua
            </h2>
            <p>
              Vivamus eget dui mi. In eleifend consectetur ultrices. Sed
              scelerisque nisl tempus felis dictum, ac ultrices leo feugiat.
              Vestibulum et pellentesque eros.
            </p>
            <a class="author-bloco" href="#">
              JOÃO DA SILVA | AGÊNCIA EINSTEIN
            </a>
          </div>
        </div>
      </div>
      <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="col-12 col-xl-5">
        <div class="col-12 mt-xl-0 mt-5">
          <span class="preto-opaco">Setembro 2021</span>
          <div class="capa-revista mt-2">
            <div class="d-flex justify-content-around align-items-center content-capa-revista">
              <div class="d-flex flex-column align-items-center text-center ">
                <div class="mb-2">
                  <h4 class="letter-s10">DIGITAL</h4>
                  <h4><strong>EDIÇÃO N° 24</strong></h4>
                </div>
                <h6>
                  <strong>aproveite o conteúdo</strong>
                </h6>
              </div>
              <a href="#">
                <img src="libraries/img/capa.png" alt="capa" /></a>
            </div>
          </div>
          <div class="content-bloco-padrao mt-4">
            <div class="bloco-padrao" style="background-image: url('libraries/img/10.jpg')">
              <a class="content-sub" href="#"> Excepteur </a>
            </div>
            <h4 class="mt-4">
              Lorem ipsum dolor sit amet, consectetur adiscing elit aliqua
            </h4>
            <p>
              <img width="100" src="libraries/img/hr.jpeg" alt="hr" />
              Vivamus eget dui mi. In eleifend consectetur ultrices. Sed
              scelerisque nisl tempus felis.
            </p>
            <a class="author-bloco" href="#">
              JOÃO DA SILVA | AGÊNCIA EINSTEIN
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="bloco_mediano">
  <div class="container">
    <div class="row">
      <div class="col-12 col-xl-4">
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="500" class="content-bloco-padrao mt-4">
          <div class="bloco-padrao" style="background-image: url('libraries/img/8.jpg')">
            <a class="content-sub" href="#"> Lorem ipsum </a>
          </div>
          <h4 class="mt-4">
            Lorem ipsum dolor sit amet, consectetur adiscing elit aliqua
          </h4>
          <p>
            Vivamus eget dui mi. In eleifend consectetur ultrices. Sed
            scelerisque nisl tempus felis.
          </p>
          <a class="author-bloco" href="#">
            JOÃO DA SILVA | AGÊNCIA EINSTEIN
          </a>
        </div>
      </div>
      <div class="col-12 col-xl-4">
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="content-bloco-padrao mt-4">
          <div class="bloco-padrao" style="background-image: url('libraries/img/1.jpg')">
            <a class="content-sub" href="#"> Excepteur </a>
          </div>
          <h4 class="mt-4">
            Lorem ipsum dolor sit amet, consectetur adiscing elit aliqua
          </h4>
          <p>
            Vivamus eget dui mi. In eleifend consectetur ultrices. Sed
            scelerisque nisl tempus felis.
          </p>
          <a class="author-bloco" href="#">
            JOÃO DA SILVA | AGÊNCIA EINSTEIN
          </a>
        </div>
      </div>
      <div class="col-12 col-xl-4">
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500" class="content-bloco-padrao mt-4">
          <div class="bloco-padrao" style="background-image: url('libraries/img/9.jpg')">
            <a class="content-sub" href="#"> Excepteur </a>
          </div>
          <h4 class="mt-4">
            Lorem ipsum dolor sit amet, consectetur adiscing elit aliqua
          </h4>
          <p>
            Vivamus eget dui mi. In eleifend consectetur ultrices. Sed
            scelerisque nisl tempus felis.
          </p>
          <a class="author-bloco" href="#">
            JOÃO DA SILVA | AGÊNCIA EINSTEIN
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'newsletter.html' ?>

<section class="container" id="final-posts">
  <div class="row">
    <div class="col-12 col-xl-8">
      <div class="row">
        <div class="col-xl-6 col-12">
          <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="content-bloco-padrao mt-4">
            <div class="bloco-padrao" style="background-image: url('libraries/img/3.jpg')">
              <a class="content-sub" href="#"> Excepteur </a>
            </div>
            <h4 class="mt-4">
              Lorem ipsum dolor sit amet, consectetur adiscing elit aliqua
            </h4>
            <p>
              Vivamus eget dui mi. In eleifend consectetur ultrices. Sed
              scelerisque nisl tempus felis.
            </p>
            <a class="author-bloco" href="#">
              JOÃO DA SILVA | AGÊNCIA EINSTEIN
            </a>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500" class="col-xl-6 col-12">
          <div class="content-bloco-padrao mt-4">
            <div class="bloco-padrao" style="background-image: url('libraries/img/2.jpg')">
              <a class="content-sub" href="#"> Excepteur </a>
            </div>
            <h4 class="mt-4">
              Lorem ipsum dolor sit amet, consectetur adiscing elit aliqua
            </h4>
            <p>
              Vivamus eget dui mi. In eleifend consectetur ultrices. Sed
              scelerisque nisl tempus felis.
            </p>
            <a class="author-bloco" href="#">
              JOÃO DA SILVA | AGÊNCIA EINSTEIN
            </a>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" class="col-xl-6 col-12">
          <div class="content-bloco-padrao mt-4">
            <div class="bloco-padrao" style="background-image: url('libraries/img/3.jpg')">
              <a class="content-sub" href="#"> Excepteur </a>
            </div>
            <h4 class="mt-4">
              Lorem ipsum dolor sit amet, consectetur adiscing elit aliqua
            </h4>
            <p>
              Vivamus eget dui mi. In eleifend consectetur ultrices. Sed
              scelerisque nisl tempus felis.
            </p>
            <a class="author-bloco" href="#">
              JOÃO DA SILVA | AGÊNCIA EINSTEIN
            </a>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2500" class="col-xl-6 col-12">
          <div class="content-bloco-padrao mt-4">
            <div class="bloco-padrao" style="background-image: url('libraries/img/7.jpg')">
              <a class="content-sub" href="#"> Excepteur </a>
            </div>
            <h4 class="mt-4">
              Lorem ipsum dolor sit amet, consectetur adiscing elit aliqua
            </h4>
            <p>
              Vivamus eget dui mi. In eleifend consectetur ultrices. Sed
              scelerisque nisl tempus felis.
            </p>
            <a class="author-bloco" href="#">
              JOÃO DA SILVA | AGÊNCIA EINSTEIN
            </a>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="col-12">
          <div class="content-bloco-padrao mt-4">
            <div class="bloco-padrao" style="background-image: url('libraries/img/5.jpg')"></div>
            <h4 class="mt-4">
              Lorem ipsum dolor sit amet, consectetur adiscing elit aliqua
            </h4>
            <p>
              Vivamus eget dui mi. In eleifend consectetur ultrices. Sed
              scelerisque nisl tempus felis.
            </p>
            <a class="author-bloco" href="#">
              JOÃO DA SILVA | AGÊNCIA EINSTEIN
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-xl-4 mt-4">
      <div class="row">
        <div class="col-12 border dark-border">
          <div class="content-titulo-spc text-center mt-2 mb-2">
            <h2>ESPECIAL</h2>
            <h3>ARTICULISTAS</h3>
          </div>
          <div class="publicidade2 bg2 mt-2 mb-4"></div>
          <div class="content-author mt-2 mb-2">
            <div class="d-flex justify-content-start align-items-center">
              <a href="#">
                <img src="libraries/img/marcelo.png" alt="marcelo" width="110" height="130" /></a>
              <div class="
                      d-flex
                      align-items-center
                      justify-content-center
                      flex-column
                      text-left
                      ml-2
                    ">
                <a href="#" class="text-dark w-100">MARCELO MONTEIRO</a>
                <h3 class="w-100">O amor comum</h3>
              </div>
            </div>
            <p>
              Somos fortes o suficiente para o amor comum? A reflexão vem da
              canção "Ordinary Love, po...
            </p>
          </div>
          <div class="content-author mt-2 mb-2">
            <div class="d-flex justify-content-start align-items-center">
              <a href="#">
                <img src="libraries/img/faby.png" alt="marcelo" width="110" height="130" /></a>
              <div class="
                      d-flex
                      align-items-center
                      justify-content-center
                      flex-column
                      text-left
                      ml-2
                    ">
                <a href="#" class="text-dark w-100">FABY HOFF</a>
                <h3 class="w-100">Uma mulher que me inspira</h3>
              </div>
            </div>
            <p>
              Sou uma entusiasta por natureza. Quando vejo uma empresa ou
              alguém fazendo algo legal...
            </p>
          </div>
        </div>
        <span class="w-100 mt-5 mb-2 preto-opaco text-xl-left text-center">Livro do mês</span>
        <div class="col-12 border dark-border">
          <div class="d-flex flex-xl-row flex-column p-4 mb-4">
            <div class="
                    d-flex
                    text-left
                    justify-content-center
                    align-items-start
                    flex-column
                    w-100
                    mr-3
                  ">
              <h4 class="w-100 text-center">DEZ QUASE AMORES</h4>
              <p class="w-100 text-center">CLAUDIA TAJES</p>
              <div class="
                      d-flex
                      text-left
                      justify-content-center
                      align-items-center
                      flex-column
                      w-100
                    ">
                <a href="#" class="text-dark">compre o seu!</a>
                <a href="#">
                  <img src="libraries/img/livraria.png" width="165" height="25" alt="livaria" />
                </a>
              </div>
            </div>
            <a class="w-100 d-flex justify-content-center align-items-center" href="#">
              <img class="mt-4" src="libraries/img/livro.png" width="137" height="197" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="publicidade-2" class="mt-5 mb-5">
  <?php include 'publicidade.html' ?>
</section>

<section id="swiper-datas" class="container mb-5">
  <div class="row">
    <div class="col-12 text-center titulo-datas mb-4">
      <h4>AGENDAS</h4>
      <h3>DO MÊS 09.21</h3>
    </div>
    <div class="col-12 text-center">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="
                  swiper-slide
                  border border-dark
                  d-flex
                  align-items-center
                  justify-content-center
                  flex-column
                  p-3
                ">
            <span class="w-100 text-left">Novo Hamburgo</span>
            <h4 class="w-100 text-left">Feira de orgânicos</h4>
            <h2 class="w-100 text-right mt-5">12.09</h2>
            <div onclick="showpopup(this);" class="triangulo triangulo-siwper-verde">
              <!-- aqui vão os valores do pop up que serão inseridos com javascript -->
              <input type="hidden" name="data" value="12.09">
              <input type="hidden" name="cidade" value="Novo Hamburgo">
              <input type="hidden" name="titulo" value="Feira de Orgânicos">
              <input type="hidden" name="texto" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec auctor nulla, viverra ullamcorper nulla. Nullam hendrerit ac ipsum vitae hendrerit. Nulla sit amet velit in urna gravida facilisis. Aliquam cursus nisl ut lectus blandit scelerisque. Praesent ultrices dignissim ligula eget commodo. Integer quis mi tellus. Maecenas ut pellentesque urna. Nunc tempus fermentum nibh. Integer quis bibendum justo. Aenean ipsum urna, dignissim vitae mi et, porta vestibulum erat. Nunc sit amet varius est. Integer quis tincidunt neque.">
              <input type="hidden" name="onde" value="Quisque imperdiet dignissim nulla, sed varius eros faucibus eget. Ut gravida nibh malesuada nulla dictum mollis. Nam in augue eu nibh vulputate egestas.">
              <input type="hidden" name="quando" value="23/10/2021">
              <input type="hidden" name="horas" value="16h às 21h">
            </div>

          </div>

          <div class="
                  swiper-slide
                  border border-dark
                  d-flex
                  align-items-center
                  justify-content-center
                  flex-column
                  p-3
                ">
            <span class="w-100 text-left">São Leopoldo</span>
            <h4 class="w-100 text-left">Feira de orgânicos</h4>
            <h2 class="w-100 text-right mt-5">12.09</h2>
            <div onclick="showpopup(this);" class="triangulo triangulo-siwper-verde">
              <!-- aqui vão os valores do pop up que serão inseridos com javascript -->
              <input type="hidden" name="data" value="12.09">
              <input type="hidden" name="cidade" value="Novo Hamburgo">
              <input type="hidden" name="titulo" value="Feira de Orgânicos">
              <input type="hidden" name="texto" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec auctor nulla, viverra ullamcorper nulla. Nullam hendrerit ac ipsum vitae hendrerit. Nulla sit amet velit in urna gravida facilisis. Aliquam cursus nisl ut lectus blandit scelerisque. Praesent ultrices dignissim ligula eget commodo. Integer quis mi tellus. Maecenas ut pellentesque urna. Nunc tempus fermentum nibh. Integer quis bibendum justo. Aenean ipsum urna, dignissim vitae mi et, porta vestibulum erat. Nunc sit amet varius est. Integer quis tincidunt neque.">
              <input type="hidden" name="onde" value="Quisque imperdiet dignissim nulla, sed varius eros faucibus eget. Ut gravida nibh malesuada nulla dictum mollis. Nam in augue eu nibh vulputate egestas.">
              <input type="hidden" name="quando" value="23/10/2021">
              <input type="hidden" name="horas" value="16h às 21h">
            </div>
          </div>

          <div class="
                  swiper-slide
                  border border-dark
                  d-flex
                  align-items-center
                  justify-content-center
                  flex-column
                  p-3
                ">
            <span class="w-100 text-left">São Leopoldo</span>
            <h4 class="w-100 text-left">Feira de orgânicos</h4>
            <h2 class="w-100 text-right mt-5">12.09</h2>
            <div onclick="showpopup(this);" class="triangulo triangulo-siwper-amarelo">
              <!-- aqui vão os valores do pop up que serão inseridos com javascript -->
              <input type="hidden" name="data" value="12.09">
              <input type="hidden" name="cidade" value="Novo Hamburgo">
              <input type="hidden" name="titulo" value="Feira de Orgânicos">
              <input type="hidden" name="texto" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec auctor nulla, viverra ullamcorper nulla. Nullam hendrerit ac ipsum vitae hendrerit. Nulla sit amet velit in urna gravida facilisis. Aliquam cursus nisl ut lectus blandit scelerisque. Praesent ultrices dignissim ligula eget commodo. Integer quis mi tellus. Maecenas ut pellentesque urna. Nunc tempus fermentum nibh. Integer quis bibendum justo. Aenean ipsum urna, dignissim vitae mi et, porta vestibulum erat. Nunc sit amet varius est. Integer quis tincidunt neque.">
              <input type="hidden" name="onde" value="Quisque imperdiet dignissim nulla, sed varius eros faucibus eget. Ut gravida nibh malesuada nulla dictum mollis. Nam in augue eu nibh vulputate egestas.">
              <input type="hidden" name="quando" value="23/10/2021">
              <input type="hidden" name="horas" value="16h às 21h">
            </div>
          </div>

          <div class="
                  swiper-slide
                  border border-dark
                  d-flex
                  align-items-center
                  justify-content-center
                  flex-column
                  p-3
                ">
            <span class="w-100 text-left">São Leopoldo</span>
            <h4 class="w-100 text-left">Feira de orgânicos</h4>
            <h2 class="w-100 text-right mt-5">12.09</h2>
            <div onclick="showpopup(this);" class="triangulo triangulo-siwper-azul">
              <!-- aqui vão os valores do pop up que serão inseridos com javascript -->
              <input type="hidden" name="data" value="12.09">
              <input type="hidden" name="cidade" value="Novo Hamburgo">
              <input type="hidden" name="titulo" value="Feira de Orgânicos">
              <input type="hidden" name="texto" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec auctor nulla, viverra ullamcorper nulla. Nullam hendrerit ac ipsum vitae hendrerit. Nulla sit amet velit in urna gravida facilisis. Aliquam cursus nisl ut lectus blandit scelerisque. Praesent ultrices dignissim ligula eget commodo. Integer quis mi tellus. Maecenas ut pellentesque urna. Nunc tempus fermentum nibh. Integer quis bibendum justo. Aenean ipsum urna, dignissim vitae mi et, porta vestibulum erat. Nunc sit amet varius est. Integer quis tincidunt neque.">
              <input type="hidden" name="onde" value="Quisque imperdiet dignissim nulla, sed varius eros faucibus eget. Ut gravida nibh malesuada nulla dictum mollis. Nam in augue eu nibh vulputate egestas.">
              <input type="hidden" name="quando" value="23/10/2021">
              <input type="hidden" name="horas" value="16h às 21h">
            </div>
          </div>

          <div class="
                  swiper-slide
                  border border-dark
                  d-flex
                  align-items-center
                  justify-content-center
                  flex-column
                  p-3
                ">
            <span class="w-100 text-left">São Leopoldo</span>
            <h4 class="w-100 text-left">Feira de orgânicos</h4>
            <h2 class="w-100 text-right mt-5">12.09</h2>
            <div onclick="showpopup(this);" class="triangulo triangulo-siwper-azul">
              <!-- aqui vão os valores do pop up que serão inseridos com javascript -->
              <input type="hidden" name="data" value="12.09">
              <input type="hidden" name="cidade" value="Novo Hamburgo">
              <input type="hidden" name="titulo" value="Feira de Orgânicos">
              <input type="hidden" name="texto" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec auctor nulla, viverra ullamcorper nulla. Nullam hendrerit ac ipsum vitae hendrerit. Nulla sit amet velit in urna gravida facilisis. Aliquam cursus nisl ut lectus blandit scelerisque. Praesent ultrices dignissim ligula eget commodo. Integer quis mi tellus. Maecenas ut pellentesque urna. Nunc tempus fermentum nibh. Integer quis bibendum justo. Aenean ipsum urna, dignissim vitae mi et, porta vestibulum erat. Nunc sit amet varius est. Integer quis tincidunt neque.">
              <input type="hidden" name="onde" value="Quisque imperdiet dignissim nulla, sed varius eros faucibus eget. Ut gravida nibh malesuada nulla dictum mollis. Nam in augue eu nibh vulputate egestas.">
              <input type="hidden" name="quando" value="23/10/2021">
              <input type="hidden" name="horas" value="16h às 21h">
            </div>
          </div>

          <div class="
                  swiper-slide
                  border border-dark
                  d-flex
                  align-items-center
                  justify-content-center
                  flex-column
                  p-3
                ">
            <span class="w-100 text-left">São Leopoldo</span>
            <h4 class="w-100 text-left">Feira de orgânicos</h4>
            <h2 class="w-100 text-right mt-5">12.09</h2>
            <div onclick="showpopup(this);" class="triangulo triangulo-siwper-amarelo">
              <!-- aqui vão os valores do pop up que serão inseridos com javascript -->
              <input type="hidden" name="data" value="12.09">
              <input type="hidden" name="cidade" value="Novo Hamburgo">
              <input type="hidden" name="titulo" value="Feira de Orgânicos">
              <input type="hidden" name="texto" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec auctor nulla, viverra ullamcorper nulla. Nullam hendrerit ac ipsum vitae hendrerit. Nulla sit amet velit in urna gravida facilisis. Aliquam cursus nisl ut lectus blandit scelerisque. Praesent ultrices dignissim ligula eget commodo. Integer quis mi tellus. Maecenas ut pellentesque urna. Nunc tempus fermentum nibh. Integer quis bibendum justo. Aenean ipsum urna, dignissim vitae mi et, porta vestibulum erat. Nunc sit amet varius est. Integer quis tincidunt neque.">
              <input type="hidden" name="onde" value="Quisque imperdiet dignissim nulla, sed varius eros faucibus eget. Ut gravida nibh malesuada nulla dictum mollis. Nam in augue eu nibh vulputate egestas.">
              <input type="hidden" name="quando" value="23/10/2021">
              <input type="hidden" name="horas" value="16h às 21h">
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </div>
</section>

<section id="posts-end" class="container mt-5">
  <div class="row">
    <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="col-12 col-xl-4">
      <div class="contain-posts-end">
        <div style="background-image: url('libraries/img/7.jpg')" class="imagem-post-end"></div>
        <a href="#">
          <div class="bloco-post-end">
            <h2>GALERIA</h2>
          </div>
        </a>
        <h3>Nós respiramos cultura + arte</h3>
        <p>
          Vivamus eget dui mi. In eleifend consectetur ultrices. Sed
          scelerisque nisl tempus felis.
        </p>
      </div>
    </div>
    <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500" class="col-12 col-xl-4">
      <div class="contain-posts-end">
        <div style="background-image: url('libraries/img/9.jpg')" class="imagem-post-end"></div>
        <a href="#">
          <div class="bloco-post-end">
            <h2>ESTANTE DIGITAL</h2>
          </div>
        </a>
        <h3>Pegue um livro e fique à vontade!</h3>
        <p>
          Vivamus eget dui mi. In eleifend consectetur ultrices. Sed
          scelerisque nisl tempus felis.
        </p>
      </div>
    </div>
    <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" class="col-12 col-xl-4">
      <div class="contain-posts-end">
        <div style="background-image: url('libraries/img/4.jpg')" class="imagem-post-end"></div>
        <a href="#">
          <div class="bloco-post-end">
            <h2>SALA DE AULA</h2>
          </div>
        </a>
        <h3>
          O saber é infinito: cursos abertos para você que tem sede de
          conhecimento
        </h3>
        <p>
          Vivamus eget dui mi. In eleifend consectetur ultrices. Sed
          scelerisque nisl tempus felis.
        </p>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.html'; ?>