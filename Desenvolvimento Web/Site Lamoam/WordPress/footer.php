<footer>
  <div id="copy-area">
    <div class="container">
      <div class="row">
          <div class="col-md-12">
            <?php

              $image_attributes = wp_get_attachment_image_src( $attachment_id = get_theme_mod('footer_image'), 'full' );
              if ( $image_attributes ) : ?>
                <img src="<?php echo $image_attributes[0]; ?>" id="logo-copy" alt="LAMOAM"/>
              
              <?php else: ?>
                <img src=<?php echo get_stylesheet_directory_uri(). '/img/lamoam_logo.svg' ?> id="logo-copy" alt="LAMOAM"/>

              <?php endif; ?>

            <p></br><?php echo get_theme_mod('footer_text', 'Esta não é uma página oficial da Unicamp, seu conteúdo não foi examinado ou editado por esta instituição. A responsabilidade por seu conteúdo é exclusivamente do LAMOAM.') ?></p>
            </br><?php echo get_theme_mod('footer_copyright', '<p>Copyright <a href="'. get_site_url() .'">Laboratório LAMOAM</a> &copy; '. date('Y') .'</p>') ?></p>
            <p>Desenvolvido por  <a href="https://www.linkedin.com/in/julio-cezar-oliveira-de-simone-25296417b/" target="_blank">Julio De Simone</a> e <a href="https://www.linkedin.com/in/gabrielpaiao/" target="_blank">Gabriel Paião</a></p>
          </div>
      </div>
    </div>
  </div>
</footer>
    <?php wp_footer(); ?>
    
    <script src="<?php bloginfo('template_url') ?>/js/jquery.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/popper.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/scripts.js" type="module"></script>
    <script src="<?php bloginfo('template_url') ?>/js/orientacoes.js" type="module"></script>
  </body>
</html>