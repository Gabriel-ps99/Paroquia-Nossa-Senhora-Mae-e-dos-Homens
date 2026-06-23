<?php
/**
 * Template de fallback (arquivos, páginas e posts internos).
 *
 * A página inicial usa front-page.php. Este arquivo atende qualquer
 * outra página/post que você venha a criar no WordPress.
 *
 * @package maedoshomens
 */

get_header();
?>

  <main class="secao">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) :
        the_post();
        the_title( '<h2 class="secao__titulo">', '</h2>' );
        echo '<div class="secao__linha"></div>';
        echo '<div class="historia__conteudo">';
        the_content();
        echo '</div>';
      endwhile;
    else :
      echo '<h2 class="secao__titulo">Nada encontrado</h2>';
      echo '<div class="secao__linha"></div>';
    endif;
    ?>
  </main>

<?php
get_footer();
