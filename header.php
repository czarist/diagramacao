<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Lucas Cezar Trentin" />

  <title>Bom Exemplo - <?php echo $page_name; ?></title>
  <!-- Jquery -->
  <script src="libraries/js/jquery-3.6.0.min.js"></script>

  <!-- bootstrap -->
  <link href="libraries/bootstrap4.1.1/css/bootstrap.min.css" rel="stylesheet" />
  <script src="libraries/bootstrap4.1.1/js/bootstrap.min.js"></script>

  <!-- bootstrap icons -->
  <link rel="stylesheet" href="libraries/css/icons-1.5.0/font/bootstrap-icons.css" />

  <!-- fontawesome icons -->
  <link rel="stylesheet" href="libraries/css/fontawesome/css/all.min.css" />

  <!-- style -->
  <link href="libraries/css/style.css" rel="stylesheet" />

  <!-- js -->
  <script src="libraries/js/scripts.js" type="text/javascript"></script>

  <!-- swipper -->
  <link rel="stylesheet" href="libraries/swiper/swiper.min.css" />
  <script src="libraries/swiper/swiper.min.js"></script>

  <!-- aos -->
  <script src="libraries/aos/dist/aos.js"></script>
  <link href="libraries/aos/dist/aos.css" rel="stylesheet" />

</head>

<body id="body">

  <header id="header">
    <div class="container montserrat-regular">
      <div class="row">
        <div class="col-12 d-none d-xl-block">
          <div class="d-flex justify-content-center align-items-center">
            <h5 class="text-center border border-dark mt-2 mb-2 p-3 w-100">
              SIMPLES ASSIM: + ATITUDES POSITIVAS PARA UMA VIDA MELHOR
            </h5>
          </div>
        </div>
      </div>
      <div class="row mt-3 d-none d-xl-flex">
        <div class="col-6">
          <a class="text-dark" href="<?php echo $_SERVER['SERVER_NAME']; ?>">
            <h1 class="text-left d-flex">
              <div class="Montserrat-Light">bom</div>
              <strong>exemplo</strong>
            </h1>
          </a>
        </div>
        <div class="col-6">
          <div class="d-flex justify-content-end align-items-center">
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="d-flex text-dark">
              <div class="mr-2">
                <p class="text-right m-0 Montserrat-Light">CULTIVE TAMBÉM</p>
                <p class="text-right">
                  <span class="Montserrat-Light">BONS EXEMPLOS NO </span><strong>INSTAGRAM</strong>
                </p>
              </div>
              <i class="bi bi-instagram h1"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mt-0 mt-xl-5 mb-5 bg1 p-2">
          <div id="fixed_header" class="w-100 d-flex align-items-center justify-content-between">
            <div id="container_header" class="w-100 d-flex align-items-center justify-content-between">
              <i id="open-menu" class="bi bi-list m-0 h1 cursor-pointer"></i>
              <div id="search-form" class="off-menu">
                <form class="d-flex mr-2" action="">
                  <div class="input-group">
                    <div class="form-outline">
                      <input type="search" id="form1" placeholder="pesquisar" class="form-control" />
                    </div>
                    <button type="button" class="btn btn-dark">
                      <i class="bi bi-search"></i>
                    </button>
                  </div>
                </form>
              </div>
              <div id="titulo-mobile" class="d-block d-xl-none">
                <a class="text-dark" href="#">
                  <h1 class="text-left d-flex title-logo">
                    <div class="Montserrat-Light">bom</div>
                    <strong>exemplo</strong>
                  </h1>
                </a>
              </div>
              <div class="d-flex align-items-center">
                <i id="search-button" class="bi bi-search m-0 h2 cursor-pointer on-menu"></i>
                <i id="close-search" class="bi bi-x-circle-fill h2 cursor-pointer m-0 off-menu"></i>
              </div>
            </div>
          </div>
          <div id="sub-titulo-home" class="col-12 mt-4 mb-4 d-block d-xl-none">
            <div class="d-flex justify-content-center align-items-center">
              <h5 class="text-center sub-titulo mt-2 mb-2 w-100">
                SIMPLES ASSIM: + ATITUDES POSITIVAS PARA UMA VIDA MELHOR
              </h5>
            </div>
          </div>
        </div>
        <div class="col-12 d-none d-xl-block">
          <nav class="
              navbar
              w-100
              d-flex
              align-items-center
              justify-content-around
            ">
            <a class="text-dark" href="#">
              <strong>+ CULTURA</strong>
            </a>
            <a class="text-dark" href="#">
              <strong>+ SUSTENTABILIDADE</strong>
            </a>
            <a class="text-dark" href="#">
              <strong>+ EDUCAÇÃO</strong>
            </a>
            <a class="text-dark" href="#">
              <strong>+ FÉ</strong>
            </a>
            <a class="text-dark" href="#">
              <strong>+ SAÚDE</strong>
            </a>
            <a class="text-dark" href="#">
              <strong>+ VOLUNTARIADO</strong>
            </a>
          </nav>
          <hr class="w-100" />
        </div>
      </div>
    </div>
    <div id="outside" class="off-menu">
      <div id="outside2"></div>
      <div id="mobile-menu">
        <i id="close-menu" class="bi bi-x-lg h2"></i>
        <div class="col-12">
          <div class="d-flex align-items-center justify-content-around flex-column">
            <nav class="
                mt-5
                navbar
                w-50
                d-flex
                align-items-start
                justify-content-around
                flex-column
              ">
              <a class="text-dark mb-2" href="#">
                <strong>+ CULTURA</strong>
              </a>
              <a class="text-dark mb-2" href="#">
                <strong>+ SUSTENTABILIDADE</strong>
              </a>
              <a class="text-dark mb-2" href="#">
                <strong>+ EDUCAÇÃO</strong>
              </a>
              <a class="text-dark mb-2" href="#">
                <strong>+ FÉ</strong>
              </a>
              <a class="text-dark mb-2" href="#">
                <strong>+ SAÚDE</strong>
              </a>
              <a class="text-dark mb-2" href="#">
                <strong>+ VOLUNTARIADO</strong>
              </a>
            </nav>
            <nav class="
                mt-4
                navbar
                w-50
                d-flex
                align-items-start
                justify-content-around
                flex-column
              ">
              <a class="preto-opaco mb-3" href="#">
                <strong>EDIÇÃO DIGITAL </strong>
              </a>
              <a class="preto-opaco mb-3" href="#">
                <strong>ESPECIAL ARTICULADO</strong>
              </a>
              <a class="preto-opaco mb-3" href="#">
                <strong>LIVRO DO MÊS</strong>
              </a>
            </nav>
            <nav class="
                mt-4
                navbar
                w-50
                d-flex
                align-items-start
                justify-content-around
                flex-column
              ">
              <a class="text-dark mb-3" href="#">
                <strong>GALERIAS</strong>
              </a>
              <a class="text-dark mb-3" href="#">
                <strong>ESTANTE DIGITAL</strong>
              </a>
              <a class="text-dark mb-3" href="#">
                <strong>SALA DE AULA</strong>
              </a>
            </nav>
            <nav class="
                mt-4
                navbar
                w-50
                d-flex
                align-items-start
                justify-content-around
                flex-column
              ">
              <a class="preto-opaco mb-3" href="#">
                <strong>SOBRE O BOM EXEMPLO</strong>
              </a>
              <a class="preto-opaco mb-3" href="#">
                <strong>FALE CONOSCO</strong>
              </a>
              <a class="preto-opaco mb-3" href="#">
                <strong>SEJA NOSSO PARCEIRO</strong>
              </a>
            </nav>
          </div>
          <hr class="w-100" />
        </div>
      </div>
    </div>
  </header>
</body>