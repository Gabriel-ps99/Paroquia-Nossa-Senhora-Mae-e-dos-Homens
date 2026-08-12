<?php
/**
 * Cabeçalho do site: <head>, barra de topo e navbar.
 *
 * @package maedoshomens
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Site oficial da Paróquia Nossa Senhora Mãe dos Homens, Cuiabá - MT. Missas, sacramentos, eventos e comunidades.">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() . '/img/logofinal.png' ); ?>">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- ========================================= -->
  <!-- BARRA TOPO                                -->
  <!-- ========================================= -->
  <div class="top-bar">
    <span class="top-bar__titulo">Arquidiocese de Cuiabá</span>
    <div class="top-bar__direita">
      <a class="top-bar__liturgia" href="https://liturgia.cancaonova.com/pb/" target="_blank" rel="noopener">Liturgia Diária</a>
      <div class="top-bar__redes">
        <a href="https://www.instagram.com/maedoshomenscuiaba/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/maedoshomenscuiaba" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.youtube.com/@paroquianossasenhoramaedos5827" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        <a href="https://wa.me/5565999825244" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
      </div>
    </div>
  </div>

  <!-- ========================================= -->
  <!-- MENU / NAVBAR                             -->
  <!-- ========================================= -->
  <nav class="navbar">
    <div class="navbar__logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logofinal.png' ); ?>" alt="Logo Paróquia">
      </a>
    </div>

    <button class="navbar__toggle" aria-label="Abrir menu">
      <i class="fas fa-bars"></i>
    </button>

    <ul class="navbar__menu">
      <li><a href="#inicio">Início</a></li>
      <li><a href="#historia">A Paróquia</a></li>
      <li><a href="#missas">Missas</a></li>
      <li><a href="#sacramentos">Sacramentos</a></li>
      <li><a href="#comunidades">Comunidades</a></li>
      <li><a href="#contato">Contato</a></li>
    </ul>

    <a href="#dizimo" class="navbar__dizimo">Dízimo</a>
  </nav>
