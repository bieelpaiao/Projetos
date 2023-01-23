<?php get_header(); ?>

<?php 
    (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
    if((strcmp($pagina, "alunos") == 0) || (strcmp($pagina, "egressos") == 0)):
        require get_template_directory(). '/page_'.$pagina.'.php';
    else:
        require get_template_directory(). '/page_home.php';
    endif;
?>

<?php get_footer(); ?>