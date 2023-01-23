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
                $artigos = lerOrientacoes("Aluno");
                  
                foreach($artigos as $item)
                {
                  //aqui percorre cada artigo                     
                  echo '<div class="col-md-4 project-alunos-box '.$item['Situacao'].'"'.'>';
                    echo '<i class="fas fa-user-graduate"></i>';
                    echo "<h4>".$item['Nome']."</h4>";
                    echo "<p>".$item['Projeto']."</p>";
                    echo "<p>".$item['Curso']."</p>";
                  echo "</div>";
                }
              ?>
        </div>
      </div>
    </div>
  </div>
</main>

  <script src="js/orientacoes.js"></script>
</body>
</html>