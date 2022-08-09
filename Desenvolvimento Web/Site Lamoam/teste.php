<?php

function lerOrientacoes($area){
	$handle = fopen("csv/people2.csv", "r");
	$row = 0;
	while ($line = fgetcsv($handle, 1000, ";")) {
		if ($row++ == 0) {
			continue;
		}
		
			$artigos[] = [
			'Status' => $line[0],
			'Nome' => $line[1],
			'Situacao' => $line[2],
			'Projeto' => $line[3],
			'Curso' => $line[4]
		];
	}

	if($area == "Todos"){
		return ($artigos);
	} else {
		$sobre = array_keys(array_column($artigos, 'Status'), $area);

		for($i=0; $i<count($sobre); $i++){
			$artigosFiltered[$i] = $artigos[$sobre[$i]];
		}

		return ($artigosFiltered);
	}

	fclose($handle);
}

function contadores($stat, $sit){

	$teste = lerOrientacoes($stat);

	// Contadores para o Loading
	  $count = 0;

	  if ($stat == "Todos") {
	    foreach($teste as $item) {
	      if($item['Situacao'] == $sit) {
	          $count = $count + 1;
	      }
	    }
	  } else {
	    foreach($teste as $item) {
	      if($item['Status'] == $stat && $item['Situacao'] == $sit) {
	          $count = $count + 1;
	      }
	    }
	  }

  return ($count);
}

function inicia_contadores(){
	$todostese = contadores("Todos", "tes");
	$todosic = contadores("Todos", "ic");
	$todosdis = contadores("Todos", "dis");
	$alunostese = contadores("Aluno", "tes");
	$alunosic = contadores("Aluno", "ic");
	$alunosdis = contadores("Aluno", "dis");
	$egressostese = contadores("Egresso", "tes");
	$egressosic = contadores("Egresso", "ic");
	$egressosdis = contadores("Egresso", "dis");	  

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

$teste = inicia_contadores();
//print_r($teste);
echo $teste;
?>