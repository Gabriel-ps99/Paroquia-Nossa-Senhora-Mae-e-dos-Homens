<?php
/**
 * Rodapé do site.
 *
 * @package maedoshomens
 */
?>

  <!-- ========================================= -->
  <!-- RODAPÉ                                    -->
  <!-- ========================================= -->
  <footer id="contato" class="rodape">
    <div class="rodape__grid">

      <!-- Logo + Redes -->
      <div class="rodape__logo">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logofinal.png' ); ?>" alt="Logo Paróquia">
        <p>Paróquia Nossa Senhora Mãe dos Homens</p>
        <div class="rodape__logo-redes">
          <a href="https://www.instagram.com/maedoshomenscuiaba/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="https://www.facebook.com/maedoshomenscuiaba" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.youtube.com/@paroquianossasenhoramaedos5827" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
          <a href="https://wa.me/5565999825244" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>

      <!-- Contato -->
      <div class="rodape__contato">
        <h4>Contato</h4>
        <ul class="rodape__contato-lista">
          <li><i class="fas fa-phone"></i><span>(65) 3057-3708</span></li>
          <li><i class="fab fa-whatsapp"></i><span>(65) 9 9997-2529</span></li>
          <li><i class="fas fa-envelope"></i><a class="rodape__email" href="mailto:pnsmaedoshomens@cuiabaarquidiocese.net">pnsmaedoshomens@cuiabaarquidiocese.net</a></li>
        </ul>
      </div>

      <!-- Links Úteis -->
      <div>
        <h4>Links Úteis</h4>
        <div class="rodape__links">
          <a href="https://www.vatican.va/content/vatican/pt.html" target="_blank">Santa Sé</a>
          <a href="https://www.cnbb.org.br/" target="_blank">CNBB</a>
          <a href="https://cnbbo2.org.br" target="_blank">CNBB Regional Oeste II</a>
          <a href="https://liturgia.cancaonova.com/pb/" target="_blank">Liturgia Diária</a>
        </div>
      </div>

      <!-- Endereço -->
      <div class="rodape__endereco">
        <h4>Endereço</h4>
        <p>
          Praça Santos Dumont, 133<br>
          Quilombo — Cuiabá/MT<br>
          CEP 78045-230
        </p>
      </div>

    </div>

    <div class="rodape__copy">
      <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Paróquia Nossa Senhora Mãe dos Homens. Todos os direitos reservados.</p>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
