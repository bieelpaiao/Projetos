<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/original_style.css">

    <!-- <link rel="stylesheet" href="<?php //bloginfo('template_url'); ?>/css/responsive_mobile.css">

    <link rel="stylesheet" href="<?php //bloginfo('template_url'); ?>/css/responsive_tablet.css"> -->

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <script src="https://kit.fontawesome.com/18c0c84c7c.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">

    <!-- Progress Bar -->
    <script src="<?php bloginfo('template_url') ?>/js/progressbar.min.js"></script>
  
    <?php wp_head(); ?>
    
    <?php
      function contadores($status, $type){

        if (strcmp($status, "Todos") == 0) {
          $posts = get_posts(array(
            'post_type'     => 'orientações',
            'meta_query' => array(                               
              array(
                'key'   => 'bs4wp_guideline_type',
                'value' => $type,
              ))
          ));
        } else {
          $posts = get_posts(array(
            'post_type'     => 'orientações',
            'meta_query' => array(
              array(
                'key'   => 'bs4wp_guideline_status',
                'value' => $status,
              ),
              array(
                'key'   => 'bs4wp_guideline_type',
                'value' => $type,
              ))
          ));
        }
        
        return count($posts);
      }

      function inicia_contadores(){
        $todostese = contadores("Todos", "Tese");
        $todosic = contadores("Todos", "Iniciação Científica");
        $todosdis = contadores("Todos", "Dissertação");
        $alunostese = contadores("Aluno", "Tese");
        $alunosic = contadores("Aluno", "Iniciação Científica");
        $alunosdis = contadores("Aluno", "Dissertação");
        $egressostese = contadores("Egresso", "Tese");
        $egressosic = contadores("Egresso", "Iniciação Científica");
        $egressosdis = contadores("Egresso", "Dissertação");	  

        $script = "<script>
        var todtes=".$todostese.";
        var todic=".$todosic.";
        var toddis=".$todosdis.";
        var alutes=".$alunostese.";
        var aluic=".$alunosic.";
        var aludis=".$alunosdis.";
        var egrtes=".$egressostese.";
        var egric=".$egressosic.";
        var egrdis=".$egressosdis.";
        </script>";

        return $script;
      }

      $contadores = inicia_contadores();
      echo $contadores;                              
    ?>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="<?php echo get_stylesheet_directory_uri(). '/img/hdcagency_logo.svg' ?>" alt="Logo Lamoam" width="190px">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
      <div class="navbar-nav">
      <?php
        (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
        if (file_exists('page_'.$pagina.'.php') && $pagina == 'alunos' || $pagina == 'egressos'):
          $href = '?param=';
        else:
          $href = '#?param=';
        endif;

        echo "<a class='nav-item nav-link' id='home-menu' href='".$href."home'>Início</a>";
        echo "<a class='nav-item nav-link' id='about-menu' href='".$href."about'>".get_theme_mod('about_title', 'O LAMOAM')."</a>";
        echo "<a class='nav-item nav-link' id='services-menu' href='".$href."services'>".get_theme_mod('research_areas_title', 'Áreas de Pesquisa')."</a>";
        echo "<a class='nav-item nav-link' id='team-menu' href='".$href."team'>".get_theme_mod('team_title', 'Professores')."</a>";
        echo "<a class='nav-item nav-link' id='prod-menu' href='".$href."prod'>Orientações</a>";
        echo "<a class='nav-item nav-link' id='contact-menu' href='".$href."contact'>Onde Estamos</a>";
      ?>
      </div>
    </div>
        <a class="nav-item nav-link" href="https://www.unicamp.br/unicamp/" target="_blank"><img id="LogoU" src="<?php echo get_stylesheet_directory_uri(). '/img/UNIC_logo.png' ?>" alt="Unicamp"></a>
  </div>
</nav>