<main>
    <div class="container-fluid">
        <div id="mainSlider" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>

            <div class="carousel-inner">
                <?php 
                    // args
                    $my_args_banner = array(
                    'post_type' => 'research_areas'
                    );

                    // query
                    $my_query_banner = new WP_Query ( $my_args_banner );
                ?>

                <?php if( $my_query_banner->have_posts()) : 
                    $c = 0;
                    while( $my_query_banner->have_posts() ) : 
                    $my_query_banner->the_post(); 
                ?>

                <div class="carousel-item <?php $c++; if($c == 1) { echo ' active'; } ?>">
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'd-block w-100')) ?>
                    <div class="carousel-caption d-md-block">
                    <h2> <?php the_title(); ?> </h2>
                    </div>
                </div>

                <?php endwhile; endif; ?>

                <?php wp_reset_query(); ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div id="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title"><?php echo get_theme_mod('about_title', 'O LAMOAM') ?></h3>
                    </div>

                    <div class="col-md-6 position-relative">
                        <?php
                            $image_about_attributes = wp_get_attachment_image_src( $attachment_id = get_theme_mod('about_image'), 'full' );
                            if ( $image_about_attributes ) : ?>
                            <img src="<?php echo $image_about_attributes[0]; ?>" class="img-fluid position-absolute top-50 start-50 translate-middle" alt="Lamoam"/>
                        
                        <?php else: ?>
                            <img src=<?php echo get_stylesheet_directory_uri(). '/img/LAMOAM2.png' ?> class="img-fluid" alt="Lamoam"/>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-6 about-text position-relative">
                        <?php echo get_theme_mod('about_text', '<p>No LAMOAM buscamos estabelecer medidas de monitoramento, preservação e intervenção, relacionadas ao solo, ar e águas.</p>
                        <p>Nossas pesquisas contam com a participação de alunos de graduação e pós-graduação (mestrado e doutorado) e estão relacionadas aos seguintes temas:</p>
                        <ul id="about-list">
                            <li><i class="fas fa-check"></i> Identificação de elementos potencialmente tóxicos, que afetam as condições ambientais</li>
                            <li><i class="fas fa-check"></i>Identificação de fontes de poluição do ar e do solo;</li>
                            <li><i class="fas fa-check"></i>Integração entre outras partes do meio ambiente;</li>
                            <li><i class="fas fa-check"></i>Desenvolvimento de modelos preditivos;</li>
                            <li><i class="fas fa-check"></i>Modelos receptores;</li>
                            <li><i class="fas fa-check"></i>Caracterização de sistemas de gerenciamento de resíduos; e,</li>
                            <li><i class="fas fa-check"></i>Elaboração de inventários de ciclo de vida.</li>
                        </ul>');
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="services-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title"><?php echo get_theme_mod('research_areas_title', 'Áreas de Pesquisa') ?></h3>
                    </div>

                    <?php 
                        // args
                        $my_args_banner = array(
                        'post_type' => 'research_areas'
                        );

                        // query
                        $my_query_banner = new WP_Query ( $my_args_banner );
                    ?>

                    <?php if( $my_query_banner->have_posts()) : 
                        $c = 0;
                        while( $my_query_banner->have_posts() ) : 
                        $my_query_banner->the_post(); 
                    ?>

                    <?php
                        $research_area_title = get_the_title();
                    ?>

                    <div class="col-md-6 service-box" class="card-link" data-bs-toggle="modal" data-bs-target="#<?php $post_slug = get_post_field( 'post_name', get_post() );  echo $post_slug; ?>" >
                        <?php echo get_post_meta( get_the_ID(), 'bs4wp_research_area_icon', true ); ?>
                        <h4> <?php the_title(); ?> </h4>
                        <p> <?php echo get_post_meta( get_the_ID(), 'bs4wp_research_area_description', true ); ?> </p>
                    </div>

                    <div class="modal fade" id="<?php $post_slug = get_post_field( 'post_name', get_post() );  echo $post_slug; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"><?php the_title(); ?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                            
                                    <ol>
                                        <?php 
                                            // args
                                            $my_args_articles = array(
                                                'post_type' => 'artigos',
                                            );

                                            // query
                                            $my_query_articles = new WP_Query ( $my_args_articles );
                                        ?>

                                        <?php if( $my_query_articles->have_posts()) : 
                                            $c = 0;
                                            while( $my_query_articles->have_posts() ) : 
                                            $my_query_articles->the_post(); 
                                        ?>

                                        
                                        <?php
                                            $title = get_the_title();
                                            $year = get_post_meta( get_the_ID(), 'bs4wp_article_year', true );
                                            $area = get_post_meta( get_the_ID(), 'bs4wp_article_area', true );
                                            $authors = get_post_meta( get_the_ID(), 'bs4wp_article_authors', true );
                                            $link = get_post_meta( get_the_ID(), 'bs4wp_article_link', true );
                                            $local = get_post_meta( get_the_ID(), 'bs4wp_article_local', true );

                                            if (strcmp($area, $research_area_title) == 0 ) {
                                            echo "<li>";
                                            echo $authors.".<a href='".$link."' target='blank'> ".$title."</a>".". ".$local.", ".$year.".";
                                            echo "</li>";
                                            }
                                            
                                        ?>

                                        <?php endwhile; endif; ?>

                                        <?php wp_reset_query(); ?>
                                    </ol>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn modal-btn" data-bs-dismiss="modal">Fechar</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <?php endwhile; endif; ?>

                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>

        <div id="team-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title"><?php echo get_theme_mod('team_title', 'Professores') ?></h3>
                    </div>

                        <?php 
                            // args
                            $my_args_teachers = array(
                            'post_type' => 'professores'
                            );

                            // query
                            $my_query_teachers = new WP_Query ( $my_args_teachers );
                        ?>

                        <?php if( $my_query_teachers->have_posts()) : 
                            $c = 0;
                            while( $my_query_teachers->have_posts() ) : 
                            $my_query_teachers->the_post(); 
                        ?>

                    <div class="col-md-4">
                        <div class="card">
                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'card-img-top')); ?>

                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php echo get_post_meta( get_the_ID(), 'bs4wp_teacher_role', true ); ?></p>

                                <img class="card-icon team-img" src="<?php echo get_stylesheet_directory_uri(). '/img/CONTATO.svg' ?>" alt="email" onmouseover="this.src='<?php echo get_stylesheet_directory_uri().'/img/CONTATO_AZ.svg' ?>'"
                                    onmouseout="this.src='<?php echo get_stylesheet_directory_uri(). '/img/CONTATO.svg' ?>'" data-bs-toggle="modal" data-bs-target="#<?php $post_slug = get_post_field( 'post_name', get_post() );  echo $post_slug; ?>">

                                <a class="card-icon" href="<?php echo get_post_meta( get_the_ID(), 'bs4wp_teacher_lattes', true ); ?>" target="_blank">
                                    <img class="card-icon team-img" src="<?php echo get_stylesheet_directory_uri(). '/img/LATTES.svg' ?>" alt="Lattes" onmouseover="this.src='<?php echo get_stylesheet_directory_uri(). '/img/LATTES_AZ.svg' ?>'"
                                    onmouseout="this.src='<?php echo get_stylesheet_directory_uri(). '/img/LATTES.svg' ?>'">
                                </a>

                                <a class="card-icon" href="<?php echo get_post_meta( get_the_ID(), 'bs4wp_teacher_orcid', true ); ?>" target="_blank">
                                    <img class="card-icon team-img" src="<?php echo get_stylesheet_directory_uri(). '/img/ORCID.svg' ?>" alt="OrcID" onmouseover="this.src='<?php echo get_stylesheet_directory_uri(). '/img/ORCID_AZ.svg' ?>'"
                                    onmouseout="this.src='<?php echo get_stylesheet_directory_uri(). '/img/ORCID.svg' ?>'">
                                </a>
                            </div>

                            <div class="modal fade" id="<?php $post_slug = get_post_field( 'post_name', get_post() );  echo $post_slug; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Contato - Prof. <?php the_title(); ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <ul>
                                                <li>
                                                <span>Email: </span> <a href="<?php echo get_post_meta( get_the_ID(), 'bs4wp_teacher_email', true ); ?>" target="_blank"><?php echo get_post_meta( get_the_ID(), 'bs4wp_teacher_email', true ); ?></a>
                                                </li>

                                                <li>
                                                    <span>Telefone: </span> <?php echo get_post_meta( get_the_ID(), 'bs4wp_teacher_phone', true ); ?>
                                                </li>

                                                <li>
                                                    <span>Sala: </span> <?php echo get_post_meta( get_the_ID(), 'bs4wp_teacher_room', true ); ?>
                                                </li> 
                                            </ul>
                                        </div>

                                        <div class="modal-footer">
                                        <button type="button" class="btn modal-btn" data-bs-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; endif; ?>

                    <?php wp_reset_query(); ?>

                </div>    
            </div>
        </div>

        <div class="loading" id="loading-area">
            <div id="text-area">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title2"><?php echo get_theme_mod('guidelines_title', 'Orientações') ?></h3>
                    </div>

                    <div class="col-md-12" id="filter-loading-btn-box">
                    <button class="main-loading-btn filter-loading-btn loading-active" id="todos-btn"><?php echo get_theme_mod('guidelines_all_button', 'Todas') ?></button>
                    <button class="main-loading-btn filter-loading-btn" id="alunos-btn"><?php echo get_theme_mod('guidelines_student_button', 'Em andamento') ?></button>
                    <button class="main-loading-btn filter-loading-btn" id="egressos-btn"><?php echo get_theme_mod('guidelines_egress_button', 'Concluídas') ?></button>
                        <a href="?p=alunos"><button class="main-loading-btn filter-loading-btn" id="ver-alunos-btn"><?php echo get_theme_mod('guidelines_view_student_button', 'Ver Aluos') ?></button></a>
                        <a href="?p=egressos"><button class="main-loading-btn filter-loading-btn" id="ver-egressos-btn"><?php echo get_theme_mod('guidelines_view_egress_button', 'Ver Egressos') ?></button></a>
                    </div>
                </div>
            </div>      

            <div id="data-area">
                <div class="container4" id="load">
                    <div class="row">    
                        <div class="col-md-4 col-xs-6 circle-box">
                            <div id="circleA"></div>
                            <p>Teses</p>
                        </div>
                        
                        <div class="col-md-4 col-xs-6 circle-box">
                            <div id="circleB"></div>
                            <p>Dissertações</p>
                        </div>

                        <div class="col-md-4 col-xs-6 circle-box">
                            <div id="circleC"></div>
                            <p>Iniciação Científica</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="services-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title">Projetos</h3>
                    </div>

                    <?php 
                        // args
                        $my_args_projects = array(
                            'post_type' => 'projetos',
                        );

                        // query
                        $my_query_projects = new WP_Query ( $my_args_projects );
                    ?>

                    <?php if( $my_query_projects->have_posts()) : 
                        $c = 0;
                        while( $my_query_projects->have_posts() ) : 
                        $my_query_projects->the_post(); 
                    ?>

                    <div class="col-md-4 service-box">
                        <?php the_post_thumbnail('post-thumbnail') ?>
                        <h4> <?php the_title(); ?> </h4>
                        <p> <?php echo get_post_meta( get_the_ID(), 'bs4wp_project_description', true ); ?> </p>
                    </div>

                    <?php endwhile; endif; ?>

                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>

        <div id="services-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title">Parceiros</h3>
                    </div>

                    <?php 
                        // args
                        $my_args_partners = array(
                        'post_type' => 'parceiros'
                        );

                        // query
                        $my_query_partners = new WP_Query ( $my_args_partners );
                    ?>

                    <?php if( $my_query_partners->have_posts()) : 
                        $c = 0;
                        while( $my_query_partners->have_posts() ) : 
                        $my_query_partners->the_post(); 
                    ?>

                    <div class="col-md-4 service-box">
                        <a href="<?php echo get_post_meta( get_the_ID(), 'bs4wp_partners_link', true ); ?>" target="_blank"> <?php the_post_thumbnail('post-thumbnail'); ?> </a>
                    </div>

                    <?php endwhile; endif; ?>

                    <?php wp_reset_query(); ?>
                   
                </div>
            </div>
        </div>

        <div id="services-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title">Financiamento</h3>
                    </div>

                    <?php 
                        // args
                        $my_args_financiers = array(
                        'post_type' => 'financiamento'
                        );

                        // query
                        $my_query_financiers = new WP_Query ( $my_args_financiers );
                    ?>

                    <?php if( $my_query_financiers->have_posts()) : 
                        $c = 0;
                        while( $my_query_financiers->have_posts() ) : 
                        $my_query_financiers->the_post(); 
                    ?>

                    <div class="col-md-6 service-box">
                        <a href="<?php echo get_post_meta( get_the_ID(), 'bs4wp_financiers_link', true ); ?>" target="_blank"> <?php the_post_thumbnail('post-thumbnail'); ?> </a>
                    </div>

                    <?php endwhile; endif; ?>

                    <?php wp_reset_query(); ?>

                </div>
            </div>
        </div> 

        <div id="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title"><?php echo get_theme_mod('location_title', 'Onde Estamos') ?></h3>
                    </div>

                    <div class="col-md-6 contact-box">
                        <div class="content">
                            <?php echo get_theme_mod('location_icon', '<i class="fas fa-map-marker-alt"></i>') ?>
                            <?php echo get_theme_mod('location_text', '<p>O Lamoam é sediado na <a href="https://www.ft.unicamp.br/" target="_blank">Faculdade de Tecnologia da UNICAMP</a></p>') ?>            
                            <?php echo get_theme_mod('location_address', '<p>Rua Paschoal Marmo, 1888 - Jardim Nova Italia, Limeira - SP, 13484-332</p>') ?>
                        </div>
                    </div>

                    <div class="col-md-6 contact-box">
                        <?php echo get_theme_mod('location_map_iframe', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.446414946719!2d-47.427301585611986!3d-22.562401031343832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8806cf1fc392d%3A0xf7f5dbc6128be719!2sFaculdade%20de%20Tecnologia%20(FT)%20da%20UNICAMP!5e0!3m2!1spt-BR!2sbr!4v1654295188942!5m2!1spt-BR!2sbr" width="450" height="340" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


