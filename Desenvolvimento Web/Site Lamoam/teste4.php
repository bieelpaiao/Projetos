<?php 

header('Content-Type: text/html; charset=utf-8');

function lerProjetos(){
  $handle = fopen("csv/projetos.csv", "r");
  $row = 0;
  while ($line = fgetcsv($handle, 1000, ",")) {
    if ($row++ == 0) {
      continue;
    }
    
      $artigos[] = [
      'Titulo' => $line[0],
      'Processo' => $line[1],
      'Situacao' => $line[2]
    ];
  }

  return ($artigos);
  fclose($handle);
}

$artigos = lerProjetos();
                foreach($artigos as $item)
                {
                  //if ($item['Situacao'] == "Atual"){
                    $img = "img/CNPQ_logo.png";
                  //} else {
                    //$img = "img/CNPQ_logo2.png";
                  //}
                  //aqui percorre cada artigo                     
                  echo '<div class="col-md-4 service-box">';
                    echo '<img src="'.$img.'" alt="CNPQ">';
                    echo '<h4>'.$item['Processo'].'</h4>';
                    echo '<p>'.$item['Titulo'].'</p>';
                  echo '</div>';
                }
?>
