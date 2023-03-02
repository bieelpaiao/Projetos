<?php


/*---------------------- META BOX - ORIENTAÇÕES ---------------------- */
    // Register Meta Box
    add_action( 'add_meta_boxes', function() {
        add_meta_box( 'bs4wp_guideline_data', 'Dados do Orientando', 'bs4wp_guideline_data_field_cb', 'orientações', 'normal' );
    } );

    //Meta callback function
    function bs4wp_guideline_data_field_cb( $post ) {
        $bs4wp_meta_val_status = get_post_meta( $post->ID, 'bs4wp_guideline_status', true );
        $bs4wp_meta_val_type = get_post_meta( $post->ID, 'bs4wp_guideline_type', true );
        $bs4wp_meta_val_project_title = get_post_meta( $post->ID, 'bs4wp_guideline_project_title', true );
        $bs4wp_meta_val_start = get_post_meta( $post->ID, 'bs4wp_guideline_start', true );
        $bs4wp_meta_val_conclusion = get_post_meta( $post->ID, 'bs4wp_guideline_conclusion', true );
        $bs4wp_meta_val_course = get_post_meta( $post->ID, 'bs4wp_guideline_course', true );
        $bs4wp_meta_val_instituition = get_post_meta( $post->ID, 'bs4wp_guideline_instituition', true );
        $bs4wp_meta_val_advisor = get_post_meta( $post->ID, 'bs4wp_guideline_advisor', true );
        $bs4wp_meta_val_co_advisor = get_post_meta( $post->ID, 'bs4wp_guideline_co-advisor', true );
        ?>

        <div class="bs4wp_form">
            <style scoped>
                .bs4wp_form {
                    display: grid;
                    grid-template-columns: max-content auto;
                    grid-column-gap: 20px;
                    grid-row-gap: 15px;
                }

                .bs4wp_field {
                    display: contents;
                }
            </style>

            <div class="bs4wp_field">
                <label for="guideline_status">Status: </label>
                <select name="bs4wp_guideline_status" id="guideline_status" required>
                    <option> Selecione </option>
                    <option value="Aluno" <?php selected( $bs4wp_meta_val_status, "Aluno" ); ?>> Aluno </option>
                    <option value="Egresso" <?php selected( $bs4wp_meta_val_status, "Egresso" ); ?>> Egresso </option>
                </select>
            </div>

            <div class="bs4wp_field">
                <label for="guideline_type">Tipo: </label>
                <select name="bs4wp_guideline_type" id="guideline_type" required>
                    <option> Selecione </option>
                    <option value="Tese" <?php selected( $bs4wp_meta_val_type, "Tese" ); ?>> Tese </option>
                    <option value="Dissertação" <?php selected( $bs4wp_meta_val_type, "Dissertação" ); ?>> Dissertação </option>
                    <option value="Iniciação Científica" <?php selected( $bs4wp_meta_val_type, "Iniciação Científica" ); ?>> Iniciação Científica </option>
                </select>
            </div>

            <div class="bs4wp_field">
                <label for="guideline_project_title">Título do Projeto: </label>
                <input type="text" name="bs4wp_guideline_project_title" id="guideline_project_title" value="<?php echo esc_attr( $bs4wp_meta_val_project_title ) ?>" required>
            </div>

            <div class="bs4wp_field">
                <label for="guideline_start">Início: </label>
                <input type="number" name="bs4wp_guideline_start" id="guideline_start" value="<?php echo esc_attr( $bs4wp_meta_val_start ) ?>" required>
            </div>

            <div class="bs4wp_field">
                <label for="guideline_conclusion">Conclusão: </label>
                <input type="number" name="bs4wp_guideline_conclusion" id="guideline_conclusion" value="<?php echo esc_attr( $bs4wp_meta_val_conclusion ) ?>">
            </div>

            <div class="bs4wp_field">
                <label for="guideline_course">Curso: </label>
                <input type="text" name="bs4wp_guideline_course" id="guideline_course" value="<?php echo esc_attr( $bs4wp_meta_val_course ) ?>" required>
            </div>

            <div class="bs4wp_field">
                <label for="guideline_instituition">Instituição(es): </label>
                <input type="text" name="bs4wp_guideline_instituition" id="guideline_instituition" value="<?php echo esc_attr( $bs4wp_meta_val_instituition ) ?>" required>
            </div>

            <div class="bs4wp_field">
                <label for="guideline_advisor">Orientador: </label>
                <input type="text" name="bs4wp_guideline_advisor" id="guideline_advisor" value="<?php echo esc_attr( $bs4wp_meta_val_advisor ) ?>" required>
            </div>

            <div class="bs4wp_field">
                <label for="guideline_co-advisor">Coorientador(es): </label>
                <input type="text" name="bs4wp_guideline_co-advisor" id="guideline_co-advisor" value="<?php echo esc_attr( $bs4wp_meta_val_co_advisor ) ?>">
            </div>
        </div>
        <?php
    }

    //save meta value with save post hook
    add_action( 'save_post', function( $post_id ) {

        if( isset($_POST['bs4wp_guideline_status'] ) ){

            $bs4wp_guideline_status_id = sanitize_text_field($_POST['bs4wp_guideline_status']);

            update_post_meta($post_id, 'bs4wp_guideline_status', $bs4wp_guideline_status_id );

        }

        if( isset($_POST['bs4wp_guideline_type'] ) ){

            $bs4wp_guideline_type_id = sanitize_text_field($_POST['bs4wp_guideline_type']);

            update_post_meta($post_id, 'bs4wp_guideline_type', $bs4wp_guideline_type_id );

        }

        if ( isset( $_POST['bs4wp_guideline_project_title'] ) ) {
            update_post_meta( $post_id, 'bs4wp_guideline_project_title', $_POST['bs4wp_guideline_project_title'] );
        }

        if ( isset( $_POST['bs4wp_guideline_start'] ) ) {
            update_post_meta( $post_id, 'bs4wp_guideline_start', $_POST['bs4wp_guideline_start'] );
        }

        if ( isset( $_POST['bs4wp_guideline_conclusion'] ) ) {
            update_post_meta( $post_id, 'bs4wp_guideline_conclusion', $_POST['bs4wp_guideline_conclusion'] );
        }

        if ( isset( $_POST['bs4wp_guideline_course'] ) ) {
            update_post_meta( $post_id, 'bs4wp_guideline_course', $_POST['bs4wp_guideline_course'] );
        }

        if ( isset( $_POST['bs4wp_guideline_instituition'] ) ) {
            update_post_meta( $post_id, 'bs4wp_guideline_instituition', $_POST['bs4wp_guideline_instituition'] );
        }

        if ( isset( $_POST['bs4wp_guideline_advisor'] ) ) {
            update_post_meta( $post_id, 'bs4wp_guideline_advisor', $_POST['bs4wp_guideline_advisor'] );
        }

        if ( isset( $_POST['bs4wp_guideline_co-advisor'] ) ) {
            update_post_meta( $post_id, 'bs4wp_guideline_co-advisor', $_POST['bs4wp_guideline_co-advisor'] );
        }
    } );

/*---------------------- META BOX - ÁREAS DE PESQUISA ---------------------- */
    // Register Meta Box
    add_action( 'add_meta_boxes', function() {
        add_meta_box( 'bs4wp_research_areas_data', 'Dados da Área de Pesquisa', 'bs4wp_research_areas_data_field_cb', 'research_areas', 'normal' );
    } );

    //Meta callback function
    function bs4wp_research_areas_data_field_cb( $post ) {
        $bs4wp_meta_val_description = get_post_meta( $post->ID, 'bs4wp_research_area_description', true );
        $bs4wp_meta_val_icon = get_post_meta( $post->ID, 'bs4wp_research_area_icon', true );
        ?>

        <div class="bs4wp_form">
            <style scoped>
                .bs4wp_form {
                    display: grid;
                    grid-template-columns: max-content auto;
                    grid-column-gap: 20px;
                    grid-row-gap: 15px;
                }

                .bs4wp_field {
                    display: contents;
                }

                .bs4wp_field label{
                    text-transform: capitalize;
                }
            </style>

            <div class="bs4wp_field">
                <label for="research_area_description">Descrição: </label>
                <input type="text" name="bs4wp_research_area_description" id="research_area_description" value="<?php echo esc_attr( $bs4wp_meta_val_description ) ?>" required>
            </div>

            <div class="bs4wp_field">
                <label for="research_area_icon">Ícone (Font Awesome HTML): </label>
                <input type="text" name="bs4wp_research_area_icon" id="research_area_icon" value="<?php echo esc_attr( $bs4wp_meta_val_icon ) ?>" required>
            </div>
        </div>
        <?php
    }

    //save meta value with save post hook
    add_action( 'save_post', function( $post_id ) {

        if ( isset( $_POST['bs4wp_research_area_description'] ) ) {
            update_post_meta( $post_id, 'bs4wp_research_area_description', $_POST['bs4wp_research_area_description'] );
        }

        if ( isset( $_POST['bs4wp_research_area_icon'] ) ) {
            update_post_meta( $post_id, 'bs4wp_research_area_icon', $_POST['bs4wp_research_area_icon'] );
        }

    } );

/*---------------------- META BOX - ARTIGOS ---------------------- */
    // Register Meta Box
    add_action( 'add_meta_boxes', function() {
        add_meta_box( 'bs4wp_articles_data', 'Dados do Artigo', 'bs4wp_articles_data_field_cb', 'artigos', 'normal' );
    } );

    //Meta callback function
    function bs4wp_articles_data_field_cb( $post ) {
        $bs4wp_meta_val_year = get_post_meta( $post->ID, 'bs4wp_article_year', true );
        $bs4wp_meta_val_area = get_post_meta( $post->ID, 'bs4wp_article_area', true );
        $bs4wp_meta_val_authors = get_post_meta( $post->ID, 'bs4wp_article_authors', true );
        $bs4wp_meta_val_link = get_post_meta( $post->ID, 'bs4wp_article_link', true );
        $bs4wp_meta_val_local = get_post_meta( $post->ID, 'bs4wp_article_local', true );
        ?>

        <div class="bs4wp_form">
            <style scoped>
                .bs4wp_form {
                    display: grid;
                    grid-template-columns: max-content auto;
                    grid-column-gap: 20px;
                    grid-row-gap: 15px;
                }

                .bs4wp_field {
                    display: contents;
                }

                .bs4wp_field label{
                    text-transform: capitalize;
                }
            </style>

            <div class="bs4wp_field">
                <label for="article_area">Área de Pesquisa: </label>
                <select name="bs4wp_article_area" id="article_area" required>
                    <option> Selecione </option>
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

                    <?php $title = get_the_title(); ?>

                    <option value="<?php the_title(); ?>" <?php selected( $bs4wp_meta_val_area, $title ); ?>> <?php the_title(); ?> </option>
                    
                    <?php endwhile; endif; ?>

                    <?php wp_reset_query(); ?>
                </select>
            </div>

            <div class="bs4wp_field">
                <label for="article_authors">Autores: </label>
                <input type="text" name="bs4wp_article_authors" id="article_authors" value="<?php echo esc_attr( $bs4wp_meta_val_authors ) ?>" required>
            </div>

            <div class="bs4wp_field">
                <label for="article_local">Local: </label>
                <input type="text" name="bs4wp_article_local" id="article_local" value="<?php echo esc_attr( $bs4wp_meta_val_local ) ?>" required>
            </div>

            <div class="bs4wp_field">
                <label for="article_year">Ano: </label>
                <input type="text" name="bs4wp_article_year" id="article_year" value="<?php echo esc_attr( $bs4wp_meta_val_year ) ?>" required>
            </div>

            <div class="bs4wp_field">
                <label for="article_link">Link: </label>
                <input type="text" name="bs4wp_article_link" id="article_link" value="<?php echo esc_attr( $bs4wp_meta_val_link ) ?>" required>
            </div>
        </div>
        <?php
    }

    //save meta value with save post hook
    add_action( 'save_post', function( $post_id ) {

        if( isset($_POST['bs4wp_article_area'] ) ){

            $bs4wp_article_area_id = sanitize_text_field($_POST['bs4wp_article_area']);

            update_post_meta($post_id, 'bs4wp_article_area', $bs4wp_article_area_id );

        }

        if ( isset( $_POST['bs4wp_article_authors'] ) ) {
            update_post_meta( $post_id, 'bs4wp_article_authors', $_POST['bs4wp_article_authors'] );
        }

        if ( isset( $_POST['bs4wp_article_local'] ) ) {
            update_post_meta( $post_id, 'bs4wp_article_local', $_POST['bs4wp_article_local'] );
        }

        if ( isset( $_POST['bs4wp_article_year'] ) ) {
            update_post_meta( $post_id, 'bs4wp_article_year', $_POST['bs4wp_article_year'] );
        }

        if ( isset( $_POST['bs4wp_article_link'] ) ) {
            update_post_meta( $post_id, 'bs4wp_article_link', $_POST['bs4wp_article_link'] );
        }

    } );
    
/*---------------------- META BOX - PROJETOS ---------------------- */
    // Register Meta Box
    add_action( 'add_meta_boxes', function() {
        add_meta_box( 'bs4wp_projects_data', 'Dados do Projeto', 'bs4wp_projects_data_field_cb', 'projetos', 'normal' );
    } );

    //Meta callback function
    function bs4wp_projects_data_field_cb( $post ) {
        $bs4wp_meta_val_title = get_post_meta( $post->ID, 'bs4wp_project_title', true );
        $bs4wp_meta_val_link = get_post_meta( $post->ID, 'bs4wp_project_link', true );
        ?>

        <div class="bs4wp_form">
            <style scoped>
                .bs4wp_form {
                    display: grid;
                    grid-template-columns: max-content auto;
                    grid-column-gap: 20px;
                    grid-row-gap: 15px;
                }

                .bs4wp_field {
                    display: contents;
                }

                .bs4wp_field label{
                    text-transform: capitalize;
                }
            </style>

            <div class="bs4wp_field">
                <label for="project_title">Título do Projeto: </label>
                <input type="text" name="bs4wp_project_title" id="project_title" value="<?php echo esc_attr( $bs4wp_meta_val_title ) ?>" required>
            </div>

            <div class="bs4wp_field">
                <label for="project_link">Link: </label>
                <input type="text" name="bs4wp_project_link" id="project_link" value="<?php echo esc_attr( $bs4wp_meta_val_link ) ?>">
            </div>
        </div>
        <?php
    }

    //save meta value with save post hook
    add_action( 'save_post', function( $post_id ) {

        if ( isset( $_POST['bs4wp_project_title'] ) ) {
            update_post_meta( $post_id, 'bs4wp_project_title', $_POST['bs4wp_project_title'] );
        }

        if ( isset( $_POST['bs4wp_project_link'] ) ) {
            update_post_meta( $post_id, 'bs4wp_project_link', $_POST['bs4wp_project_link'] );
        }

    } );

/*---------------------- META BOX - PROFESSORES ---------------------- */
    // Register Meta Box
    add_action( 'add_meta_boxes', function() {
        add_meta_box( 'bs4wp_teachers_data', 'Dados do Professor', 'bs4wp_teachers_data_field_cb', 'professores', 'normal' );
    } );

    //Meta callback function
    function bs4wp_teachers_data_field_cb( $post ) {
        $bs4wp_meta_val_role = get_post_meta( $post->ID, 'bs4wp_teacher_role', true );
        $bs4wp_meta_val_lattes = get_post_meta( $post->ID, 'bs4wp_teacher_lattes', true );
        $bs4wp_meta_val_orcid = get_post_meta( $post->ID, 'bs4wp_teacher_orcid', true );
        $bs4wp_meta_val_email = get_post_meta( $post->ID, 'bs4wp_teacher_email', true );
        $bs4wp_meta_val_phone = get_post_meta( $post->ID, 'bs4wp_teacher_phone', true );
        $bs4wp_meta_val_room = get_post_meta( $post->ID, 'bs4wp_teacher_room', true );
        ?>

        <div class="bs4wp_form">
            <style scoped>
                .bs4wp_form {
                    display: grid;
                    grid-template-columns: max-content auto;
                    grid-column-gap: 20px;
                    grid-row-gap: 15px;
                }

                .bs4wp_field {
                    display: contents;
                }

                .bs4wp_field label{
                    text-transform: capitalize;
                }
            </style>

            <div class="bs4wp_field">
                <label for="teacher_role">Título: </label>
                <input type="text" name="bs4wp_teacher_role" id="teacher_role" value="<?php echo esc_attr( $bs4wp_meta_val_role ) ?>" required>
            </div>

            <div class="bs4wp_field">
                <label for="teacher_lattes">Lattes: </label>
                <input type="text" name="bs4wp_teacher_lattes" id="teacher_lattes" value="<?php echo esc_attr( $bs4wp_meta_val_lattes ) ?>" required>
            </div>

            <div class="bs4wp_field">
                <label for="teacher_orcid">ORCID: </label>
                <input type="text" name="bs4wp_teacher_orcid" id="teacher_orcid" value="<?php echo esc_attr( $bs4wp_meta_val_orcid ) ?>" required>
            </div>

            <div class="bs4wp_field">
                <label for="teacher_email">E-mail: </label>
                <input type="email" name="bs4wp_teacher_email" id="teacher_email" value="<?php echo esc_attr( $bs4wp_meta_val_email ) ?>" required>
            </div>

            <div class="bs4wp_field">
                <label for="teacher_phone">Telefone: </label>
                <input type="tel" name="bs4wp_teacher_phone" id="teacher_phone" value="<?php echo esc_attr( $bs4wp_meta_val_phone ) ?>" required>
            </div>

            <div class="bs4wp_field">
                <label for="teacher_room">Sala: </label>
                <input type="text" name="bs4wp_teacher_room" id="teacher_room" value="<?php echo esc_attr( $bs4wp_meta_val_room ) ?>" required>
            </div>
        </div>
        <?php
    }

    //save meta value with save post hook
    add_action( 'save_post', function( $post_id ) {

        if ( isset( $_POST['bs4wp_teacher_role'] ) ) {
            update_post_meta( $post_id, 'bs4wp_teacher_role', $_POST['bs4wp_teacher_role'] );
        }

        if ( isset( $_POST['bs4wp_teacher_lattes'] ) ) {
            update_post_meta( $post_id, 'bs4wp_teacher_lattes', $_POST['bs4wp_teacher_lattes'] );
        }

        if ( isset( $_POST['bs4wp_teacher_orcid'] ) ) {
            update_post_meta( $post_id, 'bs4wp_teacher_orcid', $_POST['bs4wp_teacher_orcid'] );
        }

        if ( isset( $_POST['bs4wp_teacher_email'] ) ) {
            update_post_meta( $post_id, 'bs4wp_teacher_email', $_POST['bs4wp_teacher_email'] );
        }

        if ( isset( $_POST['bs4wp_teacher_phone'] ) ) {
            update_post_meta( $post_id, 'bs4wp_teacher_phone', $_POST['bs4wp_teacher_phone'] );
        }

        if ( isset( $_POST['bs4wp_teacher_room'] ) ) {
            update_post_meta( $post_id, 'bs4wp_teacher_room', $_POST['bs4wp_teacher_room'] );
        }

    } );

/*---------------------- META BOX - PARCEIROS ---------------------- */
    // Register Meta Box
    add_action( 'add_meta_boxes', function() {
        add_meta_box( 'bs4wp_partners_data', 'Dados do Parceiro', 'bs4wp_partners_data_field_cb', 'parceiros', 'normal' );
    } );

    //Meta callback function
    function bs4wp_partners_data_field_cb( $post ) {
        $bs4wp_meta_val_link = get_post_meta( $post->ID, 'bs4wp_partners_link', true );
        ?>

        <div class="bs4wp_form">
            <style scoped>
                .bs4wp_form {
                    display: grid;
                    grid-template-columns: max-content auto;
                    grid-column-gap: 20px;
                    grid-row-gap: 15px;
                }

                .bs4wp_field {
                    display: contents;
                }

                .bs4wp_field label{
                    text-transform: capitalize;
                }
            </style>

            <div class="bs4wp_field">
                <label for="partners_link">Link: </label>
                <input type="text" name="bs4wp_partners_link" id="partners_link" value="<?php echo esc_attr( $bs4wp_meta_val_link ) ?>">
            </div>
        </div>
        <?php
    }

    //save meta value with save post hook
    add_action( 'save_post', function( $post_id ) {

        if ( isset( $_POST['bs4wp_partners_link'] ) ) {
            update_post_meta( $post_id, 'bs4wp_partners_link', $_POST['bs4wp_partners_link'] );
        }

    } );

/*---------------------- META BOX - FINANCIAMENTO ---------------------- */
    // Register Meta Box
    add_action( 'add_meta_boxes', function() {
        add_meta_box( 'bs4wp_financier_data', 'Dados do Financiador', 'bs4wp_financier_data_field_cb', 'financiamento', 'normal' );
    } );

    //Meta callback function
    function bs4wp_financier_data_field_cb( $post ) {
        $bs4wp_meta_val_link = get_post_meta( $post->ID, 'bs4wp_financier_link', true );
        ?>

        <div class="bs4wp_form">
            <style scoped>
                .bs4wp_form {
                    display: grid;
                    grid-template-columns: max-content auto;
                    grid-column-gap: 20px;
                    grid-row-gap: 15px;
                }

                .bs4wp_field {
                    display: contents;
                }

                .bs4wp_field label{
                    text-transform: capitalize;
                }
            </style>

            <div class="bs4wp_field">
                <label for="financier_link">Link: </label>
                <input type="text" name="bs4wp_financier_link" id="financier_link" value="<?php echo esc_attr( $bs4wp_meta_val_link ) ?>">
            </div>
        </div>
        <?php
    }

    //save meta value with save post hook
    add_action( 'save_post', function( $post_id ) {

        if ( isset( $_POST['bs4wp_financier_link'] ) ) {
            update_post_meta( $post_id, 'bs4wp_financier_link', $_POST['bs4wp_financier_link'] );
        }

    } );    

// Chamar a tag Title
    function bs4wp_title_tag() {

        // Chamar a tag Title
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'bs4wp_title_tag');

// Previnir o erro na tag Title em versões antigas
    if (!function_exists('_wp_render_title_tag')) {
        function bs4wp_render_title() {
            ?>
            <title><?php wp_title('|', true, 'right'); ?></title>
            <?php
        }
        add_action('wp_head', 'bs4wp_render_title');
    }

// Criar o tipo de post para a seção ÁREAS DE PESQUISA
    function create_post_type_research_areas() {

        register_post_type('research_areas',
        // Definir as opções
        array(
            'labels' => array(
                'name' => __('Áreas de Pesquisa'),
                'singular_name' => __('Áreas de Pesquisa')
            ),
            'supports' => array(
                'title', 'thumbnail'
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-images-alt2',
            'rewrite' => array('slug' => 'research_areas'),
        ));
    }

// Criar o tipo de post para a seção PROJETOS
    function create_post_type_projects() {

        register_post_type('projetos',
        // Definir as opções
        array(
            'labels' => array(
                'name' => __('Projetos'),
                'singular_name' => __('Projetos')
            ),
            'supports' => array(
                'title', 'thumbnail'
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-aside',
            'rewrite' => array('slug' => 'projetos'),
        ));
    }

// Criar o tipo de post para os ARTIGOS da seção ÁREAS DE PESQUISA
    function create_post_type_articles() {

        register_post_type('artigos',
        // Definir as opções
        array(
            'labels' => array(
                'name' => __('Artigos'),
                'singular_name' => __('Artigos')
            ),
            'supports' => array(
                'title'
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-media-document',
            'rewrite' => array('slug' => 'artigos'),
        ));
    }

// Criar o tipo de post para a seção ORIENTAÇÕES
    function create_post_type_guidelines() {

        register_post_type('orientações',
        // Definir as opções
        array(
            'labels' => array(
                'name' => __('Orientações'),
                'singular_name' => __('Orientações')
            ),
            'supports' => array(
                'title'
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-businessperson',
            'rewrite' => array('slug' => 'Orientações'),
        ));
    }

// Criar o tipo de post para a seção PROFESSORES
    function create_post_type_teachers() {

        register_post_type('professores',
        // Definir as opções
        array(
            'labels' => array(
                'name' => __('Professores'),
                'singular_name' => __('Professores')
            ),
            'supports' => array(
                'title', 'thumbnail'
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-id',
            'rewrite' => array('slug' => 'Professores'),
        ));
    }

// Criar o tipo de post para a seção PARCEIROS
    function create_post_type_partners() {

        register_post_type('parceiros',
        // Definir as opções
        array(
            'labels' => array(
                'name' => __('Parceiros'),
                'singular_name' => __('Parceiros')
            ),
            'supports' => array(
                'title', 'thumbnail'
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-groups',
            'rewrite' => array('slug' => 'Professores'),
        ));
    }

// Criar o tipo de post para a seção FINANCIAMENTO
    function create_post_type_financiers() {

        register_post_type('financiamento',
        // Definir as opções
        array(
            'labels' => array(
                'name' => __('Financiamento'),
                'singular_name' => __('Financiamento')
            ),
            'supports' => array(
                'title', 'thumbnail'
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-money',
            'rewrite' => array('slug' => 'Financiamento'),
        ));
    }

// Definir as miniaturas dos posts
//add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 1280, 720, true );

//Iniciar o tipo de post
add_action('init', 'create_post_type_research_areas');
add_action('init', 'create_post_type_projects');
add_action('init', 'create_post_type_articles');
add_action('init', 'create_post_type_guidelines');
add_action('init', 'create_post_type_teachers');
add_action('init', 'create_post_type_partners');
add_action('init', 'create_post_type_financiers');

// Incluir as funções de personalização
require get_template_directory(). '/inc/customizer.php';

?>