<!DOCTYPE html>
<html lang="pt">
<head>
  <link rel="shortcut icon" href="img/PAGE_ICON2.svg" type="image/x-icon" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo gera_titulos(); ?></title>
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" media="screen and (max-width: 500px)" href="css/responsive_mobile.css">
  <link rel="stylesheet" media="screen and (max-width: 1015px)" href="css/responsive_tablet.css">
  <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  <!-- Progress Bar -->
  <script src="js/progressbar.min.js"></script>
  <!-- Parallax -->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <?php
  $contadores = inicia_contadores();
  echo $contadores;
  ?>
</head>
<body>
  <header>
    <div class="container-fluid" id="nav-container">

      <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
          <a class="navbar-brand" href="https://lamoam.epizy.com/">
            <picture>
              <source media='(max-width: 1015px)' srcset='img/LOGOS_RESPONSIVE3.png'>
              <source media='(min-width: 1016px)' srcset='img/hdcagency_logo.svg'>
              <img id="logo" src="img/hdcagency_logo.svg" alt="hDC Agency">
            </picture>
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
              echo "<a class='nav-item nav-link' id='about-menu' href='".$href."about'>O LAMOAM</a>";
              echo "<a class='nav-item nav-link' id='services-menu' href='".$href."services'>Áreas de Pesquisa</a>";
              echo "<a class='nav-item nav-link' id='team-menu' href='".$href."team'>Professores</a>";
              echo "<a class='nav-item nav-link' id='prod-menu' href='".$href."prod'>Orientações</a>";
              echo "<a class='nav-item nav-link' id='contact-menu' href='".$href."contact'>Onde Estamos</a>";
            ?>
          </div>
        </div>

        <a class="nav-item nav-link" href="https://www.unicamp.br/unicamp/" target="_blank"><img id="LogoU" src="img/UNIC_logo.png" alt="Unicamp"></a>
      </nav>
    </div>
  </header>