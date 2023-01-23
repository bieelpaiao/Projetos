<?php 

function bs4wp_customize_register($wp_customize) {

    /* ----------------------- SEÇÃO SOBRE ----------------------- */
        $wp_customize -> add_section('about', array(
            'title' => __('Seção Sobre', 'Lamoam'),
            'description' => sprintf(__('Opções para a seção sobre','Lamoam')),
            'priority' => 20
        ));

        $wp_customize -> add_setting('about_title', array(
            'default' => _x('O LAMOAM', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('about_title', array(
            'label' => __('Título da Seção Sobre', 'Lamoam'),
            'section' => 'about',
            'priority' => 1
        ));  

        $wp_customize -> add_setting('about_image', array(
            'default' => _x('Imagem da Seção Sobre', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control( new WP_Customize_Media_Control( $wp_customize, 'about_image', array(
            'label' => __( 'Imagem da Seção Sobre', 'theme_textdomain' ),
            'section' => 'about',
            'mime_type' => 'image',
            'priority' => 2
        ) ) );

        $wp_customize -> add_setting('about_text', array(
            'default' => _x('<p>No LAMOAM buscamos estabelecer medidas de monitoramento, preservação e intervenção, relacionadas ao solo, ar e águas.</p>
            <p>Nossas pesquisas contam com a participação de alunos de graduação e pós-graduação (mestrado e doutorado) e estão relacionadas aos seguintes temas:</p>
            <ul id="about-list">
            <li><i class="fas fa-check"></i> Identificação de elementos potencialmente tóxicos, que afetam as condições ambientais</li>
            <li><i class="fas fa-check"></i>Identificação de fontes de poluição do ar e do solo;</li>
            <li><i class="fas fa-check"></i>Integração entre outras partes do meio ambiente;</li>
            <li><i class="fas fa-check"></i>Desenvolvimento de modelos preditivos;</li>
            <li><i class="fas fa-check"></i>Modelos receptores;</li>
            <li><i class="fas fa-check"></i>Caracterização de sistemas de gerenciamento de resíduos; e,</li>
            <li><i class="fas fa-check"></i>Elaboração de inventários de ciclo de vida.</li>
            </ul>', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('about_text',array(
            'label' => __('Texto da Seção Sobre (em HTML)', 'Lamoam'),
            'section' => 'about',
            'priority' => 3
        ));  

    /* ----------------------- SEÇÃO ÁREAS DE PESQUISA ----------------------- */
        $wp_customize -> add_section('research_areas', array(
            'title' => __('Seção Áreas de Pesquisa', 'Lamoam'),
            'description' => sprintf(__('Opções para a seção áreas de pesquisa','Lamoam')),
            'priority' => 30
        ));

        //TÍTULO DA SEÇÃO
            $wp_customize -> add_setting('research_areas_title', array(
                'default' => _x('Áreas de Pesquisa', 'Lamoam'),
                'type' => 'theme_mod'
            ));

            $wp_customize -> add_control('research_areas_title', array(
                'label' => __('Título da Seção Áreas de Pesquisa', 'Lamoam'),
                'section' => 'research_areas',
                'priority' => 1
            ));  

    /* ----------------------- SEÇÃO PROFESSORES ----------------------- */
        $wp_customize -> add_section('team', array(
            'title' => __('Seção Professores', 'Lamoam'),
            'description' => sprintf(__('Opções para a seção professores','Lamoam')),
            'priority' => 30
        ));

        //TÍTULO DA SEÇÃO
            $wp_customize -> add_setting('team_title', array(
                'default' => _x('Professores', 'Lamoam'),
                'type' => 'theme_mod'
            ));

            $wp_customize -> add_control('team_title', array(
                'label' => __('Título da Seção Professores', 'Lamoam'),
                'section' => 'team',
                'priority' => 1
            ));

    
    /* ----------------------- SEÇÃO ORIENTAÇÕES ----------------------- */
        $wp_customize -> add_section('guidelines', array(
            'title' => __('Seção Orientações', 'Lamoam'),
            'description' => sprintf(__('Opções para a seção orientações','Lamoam')),
            'priority' => 40
        ));

        $wp_customize -> add_setting('guidelines_title', array(
            'default' => _x('Orientações', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('guidelines_title', array(
            'label' => __('Título da Seção Orientações', 'Lamoam'),
            'section' => 'guidelines',
            'priority' => 1
        ));  


        $wp_customize -> add_setting('guidelines_all_button', array(
            'default' => _x('Todas', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('guidelines_all_button',array(
            'label' => __('Texto do Botão Todos', 'Lamoam'),
            'section' => 'guidelines',
            'priority' => 2
        ));

        $wp_customize -> add_setting('guidelines_student_button', array(
            'default' => _x('Em andamento', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('guidelines_student_button',array(
            'label' => __('Texto do Botão Alunos', 'Lamoam'),
            'section' => 'guidelines',
            'priority' => 3
        )); 

        $wp_customize -> add_setting('guidelines_egress_button', array(
            'default' => _x('Concluídas', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('guidelines_egress_button',array(
            'label' => __('Texto do Botão Egressos', 'Lamoam'),
            'section' => 'guidelines',
            'priority' => 4
        ));

        $wp_customize -> add_setting('guidelines_view_student_button', array(
            'default' => _x('Ver Alunos', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('guidelines_view_student_button',array(
            'label' => __('Texto do Botão Ver Alunos', 'Lamoam'),
            'section' => 'guidelines',
            'priority' => 5
        ));

        $wp_customize -> add_setting('guidelines_view_egress_button', array(
            'default' => _x('Ver Egressos', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('guidelines_view_egress_button',array(
            'label' => __('Texto do Botão Ver Egressos', 'Lamoam'),
            'section' => 'guidelines',
            'priority' => 6
        ));

    /* ----------------------- SEÇÃO ORIENTAÇÕES ----------------------- */
        $wp_customize -> add_section('guidelines', array(
            'title' => __('Seção Orientações', 'Lamoam'),
            'description' => sprintf(__('Opções para a seção orientações','Lamoam')),
            'priority' => 50
        ));

        $wp_customize -> add_setting('guidelines_title', array(
            'default' => _x('Orientações', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('guidelines_title', array(
            'label' => __('Título da Seção Orientações', 'Lamoam'),
            'section' => 'guidelines',
            'priority' => 1
        ));  


        $wp_customize -> add_setting('guidelines_all_button', array(
            'default' => _x('Todas', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('guidelines_all_button',array(
            'label' => __('Texto do Botão Todos', 'Lamoam'),
            'section' => 'guidelines',
            'priority' => 2
        ));

        $wp_customize -> add_setting('guidelines_student_button', array(
            'default' => _x('Em andamento', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('guidelines_student_button',array(
            'label' => __('Texto do Botão Alunos', 'Lamoam'),
            'section' => 'guidelines',
            'priority' => 3
        )); 

        $wp_customize -> add_setting('guidelines_egress_button', array(
            'default' => _x('Concluídas', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('guidelines_egress_button',array(
            'label' => __('Texto do Botão Egressos', 'Lamoam'),
            'section' => 'guidelines',
            'priority' => 4
        ));

        $wp_customize -> add_setting('guidelines_view_student_button', array(
            'default' => _x('Ver Alunos', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('guidelines_view_student_button',array(
            'label' => __('Texto do Botão Ver Alunos', 'Lamoam'),
            'section' => 'guidelines',
            'priority' => 5
        ));

        $wp_customize -> add_setting('guidelines_view_egress_button', array(
            'default' => _x('Ver Egressos', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('guidelines_view_egress_button',array(
            'label' => __('Texto do Botão Ver Egressos', 'Lamoam'),
            'section' => 'guidelines',
            'priority' => 6
        ));

    /* ----------------------- SEÇÃO ONDE ESTAMOS ----------------------- */
        $wp_customize -> add_section('location', array(
            'title' => __('Seção Onde Estamos', 'Lamoam'),
            'description' => sprintf(__('Opções para a seção onde estamos','Lamoam')),
            'priority' => 60
        ));

        $wp_customize -> add_setting('location_title', array(
            'default' => _x('Onde Estamos', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('location_title', array(
            'label' => __('Título da Seção Onde Estamos', 'Lamoam'),
            'section' => 'location',
            'priority' => 1
        ));  

        $wp_customize -> add_setting('location_icon', array(
            'default' => _x('<i class="fas fa-map-marker-alt"></i>', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('location_icon',array(
            'label' => __('Ícone da Seção Onde Estamos (em Font Awesome HTML)', 'Lamoam'),
            'section' => 'location',
            'priority' => 2
        ));

        $wp_customize -> add_setting('location_text', array(
            'default' => _x('<p>O Lamoam é sediado na <a href="https://www.ft.unicamp.br/" target="_blank">Faculdade de Tecnologia da UNICAMP</a></p>', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('location_text',array(
            'label' => __('Texto da Seção Onde Estamos (em HTML)', 'Lamoam'),
            'section' => 'location',
            'priority' => 3
        ));

        $wp_customize -> add_setting('location_address', array(
            'default' => _x('<p>Rua Paschoal Marmo, 1888 - Jardim Nova Italia, Limeira - SP, 13484-332</p>', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('location_address',array(
            'label' => __('Endereço da Seção Onde Estamos (em HTML)', 'Lamoam'),
            'section' => 'location',
            'priority' => 4
        )); 

        $wp_customize -> add_setting('location_map_iframe', array(
            'default' => _x('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.446414946719!2d-47.427301585611986!3d-22.562401031343832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8806cf1fc392d%3A0xf7f5dbc6128be719!2sFaculdade%20de%20Tecnologia%20(FT)%20da%20UNICAMP!5e0!3m2!1spt-BR!2sbr!4v1654295188942!5m2!1spt-BR!2sbr" width="450" height="340" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('location_map_iframe',array(
            'label' => __('Endereço Incorporado Google Maps (em HTML)', 'Lamoam'),
            'section' => 'location',
            'priority' => 5
        )); 

    /* ----------------------- RODAPÉ ----------------------- */
        $wp_customize -> add_section('footer', array(
            'title' => __('Rodapé', 'Lamoam'),
            'description' => sprintf(__('Opções para o rodapé','Lamoam')),
            'priority' => 70
        ));

        $wp_customize -> add_setting('footer_image', array(
            'default' => _x('Meu primeiro tema de WordPress', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_image', array(
            'label' => __( 'Imagem do Rodapé', 'theme_textdomain' ),
            'section' => 'footer',
            'mime_type' => 'image',
            'priority' => 1
        ) ) );

        $wp_customize -> add_setting('footer_text', array(
            'default' => _x('Esta não é uma página oficial da Unicamp, seu conteúdo não foi examinado ou editado por esta instituição. A responsabilidade por seu conteúdo é exclusivamente do LAMOAM.', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('footer_text',array(
            'label' => __('Texto do rodapé', 'Lamoam'),
            'section' => 'footer',
            'priority' => 2
        ));

        $wp_customize -> add_setting('footer_copyright', array(
            'default' => _x('<p>Copyright <a href="'. get_site_url() .'">Laboratório LAMOAM</a> &copy;'. date('Y') .'</p>', 'Lamoam'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('footer_copyright',array(
            'label' => __('Texto do Copyright do rodapé (em HTML)', 'Lamoam'),
            'section' => 'footer',
            'priority' => 3
        )); 
}

add_action('customize_register','bs4wp_customize_register');