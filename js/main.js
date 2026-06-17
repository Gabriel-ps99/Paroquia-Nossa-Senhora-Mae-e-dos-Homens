/* ============================================= */
/* PARÓQUIA - JavaScript Principal               */
/* ============================================= */

document.addEventListener('DOMContentLoaded', function () {

  /* =========================================== */
  /* MENU MOBILE                                 */
  /* =========================================== */
  var toggle = document.querySelector('.navbar__toggle');
  var menu = document.querySelector('.navbar__menu');

  if (toggle && menu) {
    toggle.addEventListener('click', function () {
      menu.classList.toggle('aberto');
      var aberto = menu.classList.contains('aberto');
      toggle.innerHTML = aberto ? '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
    });

    // Fecha menu ao clicar em um link
    var links = menu.querySelectorAll('a');
    for (var i = 0; i < links.length; i++) {
      links[i].addEventListener('click', function () {
        menu.classList.remove('aberto');
        toggle.innerHTML = '<i class="fas fa-bars"></i>';
      });
    }
  }

  /* =========================================== */
  /* SLIDER / CARROSSEL                          */
  /* =========================================== */
  var slider = document.querySelector('.hero__slider');
  var slides = document.querySelectorAll('.hero__slide');
  var dots = document.querySelectorAll('.hero__dot');
  var btnEsq = document.querySelector('.hero__seta--esq');
  var btnDir = document.querySelector('.hero__seta--dir');
  var slideAtual = 0;
  var totalSlides = slides.length;
  var intervalo;

  function irParaSlide(n) {
    slideAtual = n;
    if (slideAtual >= totalSlides) slideAtual = 0;
    if (slideAtual < 0) slideAtual = totalSlides - 1;

    slider.style.transform = 'translateX(-' + (slideAtual * 100) + '%)';

    // Atualiza indicadores
    for (var i = 0; i < dots.length; i++) {
      dots[i].classList.remove('ativo');
    }
    if (dots[slideAtual]) {
      dots[slideAtual].classList.add('ativo');
    }
  }

  function proximoSlide() {
    irParaSlide(slideAtual + 1);
  }

  function slideAnterior() {
    irParaSlide(slideAtual - 1);
  }

  // Auto-play
  function iniciarAutoPlay() {
    intervalo = setInterval(proximoSlide, 5000);
  }

  function pararAutoPlay() {
    clearInterval(intervalo);
  }

  // Eventos das setas
  if (btnDir) {
    btnDir.addEventListener('click', function () {
      pararAutoPlay();
      proximoSlide();
      iniciarAutoPlay();
    });
  }

  if (btnEsq) {
    btnEsq.addEventListener('click', function () {
      pararAutoPlay();
      slideAnterior();
      iniciarAutoPlay();
    });
  }

  // Eventos dos indicadores
  for (var i = 0; i < dots.length; i++) {
    (function (index) {
      dots[index].addEventListener('click', function () {
        pararAutoPlay();
        irParaSlide(index);
        iniciarAutoPlay();
      });
    })(i);
  }

  // Iniciar
  if (totalSlides > 0) {
    irParaSlide(0);
    iniciarAutoPlay();
  }

  /* =========================================== */
  /* SCROLL SUAVE PARA ÂNCORAS                   */
  /* =========================================== */
  var anchors = document.querySelectorAll('a[href^="#"]');
  for (var j = 0; j < anchors.length; j++) {
    anchors[j].addEventListener('click', function (e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  }

  /* =========================================== */
  /* ANIMAÇÃo AO SCROLL (fade-in)               */
  /* =========================================== */
  var elementos = document.querySelectorAll('.secao, .padres, .banner-frase, .redes');

  function verificarVisibilidade() {
    for (var k = 0; k < elementos.length; k++) {
      var rect = elementos[k].getBoundingClientRect();
      if (rect.top < window.innerHeight - 100) {
        elementos[k].style.opacity = '1';
        elementos[k].style.transform = 'translateY(0)';
      }
    }
  }

  // Estilo inicial para animação
  for (var k = 0; k < elementos.length; k++) {
    elementos[k].style.opacity = '0';
    elementos[k].style.transform = 'translateY(20px)';
    elementos[k].style.transition = 'opacity 0.6s ease, transform 0.6s ease';
  }

  window.addEventListener('scroll', verificarVisibilidade);
  verificarVisibilidade(); // Verificar itens já visíveis

});
