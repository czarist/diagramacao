window.addEventListener("load", function () {
  // init AOS
  AOS.init();

  // add date year in footer
  new Date().getFullYear();
  document.getElementById("year").innerHTML = new Date().getFullYear();

  //fake loadmore
  if (document.getElementById("vermais")) {
    let LoadMoreBtn = document.getElementById("vermais");
    let posts = document.getElementById("posts-container");

    LoadMoreBtn.addEventListener("click", function () {
      posts.classList.remove("mt-785");
      this.remove();
    });
  }

  //change imagine in materia galeria
  if (document.getElementById("imagem_principal_galeria")) {
    var imagem_principal_galeria = document.getElementById(
      "imagem_principal_galeria"
    );
    let first_class = document.getElementsByClassName("img-galeria")[0];
    let img = first_class;
    let style = img.currentStyle || window.getComputedStyle(img, false);
    let bi = style.backgroundImage.slice(4, -1).replace(/"/g, "");

    imagem_principal_galeria.src = bi;

    for (
      var p = 0;
      p < document.getElementsByClassName("img-galeria").length;
      p++
    ) {
      // changes SRC
      document.getElementsByClassName("img-galeria")[p].onclick = function () {
        let img = this;
        let style = img.currentStyle || window.getComputedStyle(img, false);
        let bi = style.backgroundImage.slice(4, -1).replace(/"/g, "");
        let loadAnimation = document.getElementById("load-animation");
        loadAnimation.classList.remove("d-none");
        setTimeout(function () {
          loadAnimation.classList.add("d-none");
          imagem_principal_galeria.src = bi;
        }, 1500);
      };
    }
  }

  // hover triangulos
  for (
    var i = 0;
    i < document.getElementsByClassName("triangulo").length;
    i++
  ) {
    document.getElementsByClassName("triangulo")[i].onmouseover = function () {
      this.classList.add("triangulo-siwper-branco");
    };
    document.getElementsByClassName("triangulo")[i].onmouseleave = function () {
      this.classList.remove("triangulo-siwper-branco");
    };
  }

  // hover mais informações
  for (
    var i = 0;
    i < document.getElementsByClassName("informacoes_sala").length;
    i++
  ) {
    document.getElementsByClassName("informacoes_sala")[i].onmouseover =
      function () {
        this.classList.add("text-white");
        this.classList.add("bg-dark");
        this.classList.remove("text-dark");
      };
    document.getElementsByClassName("informacoes_sala")[i].onmouseleave =
      function () {
        this.classList.remove("text-white");
        this.classList.remove("bg-dark");
        this.classList.add("text-dark");
      };
  }

  // open menu
  document.getElementById("open-menu").onclick = function openmenu() {
    document.getElementById("outside").classList.remove("off-menu");
    document.getElementById("body").classList.add("overflow-hidden");
    document.getElementById("outside").classList.add("on-menu");
  };

  // close menu
  document.getElementById("close-menu").onclick = function closemenu() {
    document.getElementById("outside").classList.add("off-menu");
    document.getElementById("body").classList.remove("overflow-hidden");
    document.getElementById("outside").classList.remove("on-menu");
  };

  // close menu 2
  document.getElementById("outside2").onclick = function closemenu2() {
    document.getElementById("outside").classList.add("off-menu");
    document.getElementById("body").classList.remove("overflow-hidden");
    document.getElementById("outside").classList.remove("on-menu");
  };

  // open search
  document.getElementById("search-button").onclick = function opensearch() {
    document.getElementById("search-form").classList.remove("off-menu");
    document.getElementById("search-form").classList.add("on-menu");

    document.getElementById("close-search").classList.add("on-menu");
    document.getElementById("close-search").classList.remove("off-menu");

    document.getElementById("search-button").classList.add("off-menu");
    document.getElementById("search-button").classList.remove("on-menu");

    document.getElementById("titulo-mobile").classList.remove("d-block");
    document.getElementById("titulo-mobile").classList.add("d-none");
  };

  // close search
  document.getElementById("close-search").onclick = function closesearch() {
    document.getElementById("search-form").classList.add("off-menu");
    document.getElementById("search-form").classList.remove("on-menu");

    document.getElementById("close-search").classList.remove("on-menu");
    document.getElementById("close-search").classList.add("off-menu");

    document.getElementById("search-button").classList.remove("off-menu");
    document.getElementById("search-button").classList.add("on-menu");

    document.getElementById("titulo-mobile").classList.remove("d-none");
    document.getElementById("titulo-mobile").classList.add("d-block");
  };

  // swipper home
  var swiperGaleria = new Swiper(".swiper-galeria", {
    loop: false,
    slidesPerView: 3,
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 5000,
    },
    breakpoints: {
      320: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 5,
      },
      640: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 15,
      },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    scrollbar: {
      el: ".swiper-scrollbar",
    },
  });

  // swipper home
  var mySwiper = new Swiper(".swiper-container", {
    loop: false,
    slidesPerView: 4,
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 5000,
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    scrollbar: {
      el: ".swiper-scrollbar",
    },
  });

  // swipper Livros
  var SwiperLivros = new Swiper(".swiper-container-livros", {
    loop: false,
    slidesPerView: 7,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 5000,
    },
    breakpoints: {
      320: {
        slidesPerView: 3,
        spaceBetween: 5,
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 5,
      },
      640: {
        slidesPerView: 3,
        spaceBetween: 5,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 5,
      },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    scrollbar: {
      el: ".swiper-scrollbar",
    },
  });
});

// POP UP
function showpopup(triangulo) {
  // insert text function
  function insertText(div, text) {
    div.innerHTML = "";
    let insertText = document.createTextNode(text);
    return div.appendChild(insertText);
  }

  // variables content
  let data_value = triangulo.querySelector("input[name='data']").value;
  let cidade_value = triangulo.querySelector("input[name='cidade']").value;
  let titulo_value = triangulo.querySelector("input[name='titulo']").value;
  let texto_value = triangulo.querySelector("input[name='texto']").value;
  let onde_value = triangulo.querySelector("input[name='onde']").value;
  let quando_value = triangulo.querySelector("input[name='quando']").value;
  let horas_value = triangulo.querySelector("input[name='horas']").value;
  let cidade_popup = document.getElementById("cidade-popup");
  let data_popup = document.getElementById("data-popup");
  let titulo_popup = document.getElementById("titulo-popup");
  let texto_popup = document.getElementById("texto-popup");
  let onde_popup = document.getElementById("onde-popup");
  let horas_popup = document.getElementById("horas-popup");
  let quando_popup = document.getElementById("quando-popup");
  let triangulo_popup = document.getElementById("triangulo-popup");
  let classes_tringulo = triangulo.classList;

  // insert content
  insertText(cidade_popup, cidade_value);
  insertText(data_popup, data_value);
  insertText(titulo_popup, titulo_value);
  insertText(texto_popup, texto_value);
  insertText(onde_popup, onde_value);
  insertText(quando_popup, quando_value);
  insertText(horas_popup, horas_value);
  triangulo_popup.className = "";
  triangulo_popup.classList.add(classes_tringulo[0]);
  triangulo_popup.classList.add(classes_tringulo[1]);
  triangulo_popup.classList.add("rotate-135");

  // show popup
  document.getElementById("body").classList.add("overflow-hidden");
  document.getElementById("outside-popup").classList.add("d-flex");
  document.getElementById("outside-popup").classList.remove("d-none");
}

function closepopup() {
  // close popup
  document.getElementById("body").classList.remove("overflow-hidden");
  document.getElementById("outside-popup").classList.remove("d-flex");
  document.getElementById("outside-popup").classList.add("d-none");
}
// ends POPUP

//header transition in mobile & desktop
document.addEventListener("scroll", () => {
  let element = document.getElementById("fixed_header");
  let container = document.getElementById("container_header");
  let logoExtra = document.getElementById("titulo-mobile");

  //transition for mobile (will work only in mobile)
  if (window.pageYOffset === 0) {
    element.classList.remove("fixed_mobile");
  } else {
    element.classList.add("fixed_mobile");
  }

  //transition for desktop (will work only in desktop)
  if (window.pageYOffset > 201 && document.documentElement.clientWidth > 1024) {
    element.classList.add("fixed_desktop");
    container.classList.add("container");
    logoExtra.classList.remove("d-xl-none");
  } else {
    element.classList.remove("fixed_desktop");
    container.classList.remove("container");
    logoExtra.classList.add("d-xl-none");
  }
});
