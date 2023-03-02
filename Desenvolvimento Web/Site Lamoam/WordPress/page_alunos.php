<main>
  <div id="alunos-area">
      <div class="container3">
        <div class="row">
          <div class="col-md-12">
            <h3 class="main-title">Alunos</h3>
          </div> 
              <div class="col-md-12" id="filter-alunos-btn-box">
                <button class="main-btn filter-alunos-btn alunos-active" id="tod-btn">Todos</button>
                <button class="main-btn filter-alunos-btn" id="tes-btn">Teses</button>
                <button class="main-btn filter-alunos-btn" id="dis-btn">Dissertações</button>
                <button class="main-btn filter-alunos-btn" id="ic-btn">Iniciação Científica</button>
              </div>

              <?php 
                // args
                $my_args_guidelines = array(
                  'post_type' => 'orientações',
                  'posts_per_page' => -1
                );

                // query
                $my_args_guidelines = new WP_Query ( $my_args_guidelines );
              ?>

              <?php if( $my_args_guidelines->have_posts()) : 
                $c = 0;
                while( $my_args_guidelines->have_posts() ) : 
                  $my_args_guidelines->the_post(); 
              ?>

                <?php
                  $status = get_post_meta( get_the_ID(), 'bs4wp_guideline_status', true );
                  $type = get_post_meta( get_the_ID(), 'bs4wp_guideline_type', true );
                  $project_title = get_post_meta( get_the_ID(), 'bs4wp_guideline_project_title', true );
                  $start = get_post_meta( get_the_ID(), 'bs4wp_guideline_start', true );
                  $conclusion = get_post_meta( get_the_ID(), 'bs4wp_guideline_conclusion', true );
                  $course = get_post_meta( get_the_ID(), 'bs4wp_guideline_course', true );
                  $instituition = get_post_meta( get_the_ID(), 'bs4wp_guideline_instituition', true );
                  $advisor = get_post_meta( get_the_ID(), 'bs4wp_guideline_advisor', true );
                  $co_advisor = get_post_meta( get_the_ID(), 'bs4wp_guideline_co-advisor', true );
                  $title = get_the_title();

                  if ( strcmp($status, "Aluno") == 0 ) {
                    if ( strcmp($type, "Tese") == 0 ) {
                      $type_in = "tes";
                    } else if ( strcmp($type, "Dissertação") == 0 ) {
                      $type_in = "dis";
                    } else if ( strcmp($type, "Iniciação Científica") == 0 ) {
                      $type_in = "ic";
                    }

                    echo '<div class="col-md-4 project-alunos-box '.$type_in.'"'.'>';
                    echo '<i class="fas fa-user-graduate"></i>';
                    echo "<h4>".$title."</h4>";
                    if (strlen($conclusion) == 0) {
                      echo "<p>".$project_title.". Início: ".$start."</p>";
                    } else {
                      echo "<p>".$project_title.". Conclusão: ".$conclusion."</p>";
                    }
                    if (strlen($co_advisor) == 0) {
                      echo "<p>".$type." (".$course.") - ".$instituition.". Orientador: ".$advisor."</p>";
                    } else {
                      echo "<p>".$type." (".$course.") - ".$instituition.". Orientador: ".$advisor.". Coorientador(es): ".$co_advisor."</p>";
                    }                                      
                    echo "</div>";
                  }
                  
                ?>

              <?php endwhile; endif; ?>

              <?php wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </div>
</main>