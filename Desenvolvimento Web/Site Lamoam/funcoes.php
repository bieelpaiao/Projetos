<?php 

header('Content-Type: text/html; charset=utf-8');

function carrega_pagina(){
	(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
	if(file_exists('page_'.$pagina.'.php')):
		require_once('page_'.$pagina.'.php');
	else:
		require_once('page_home(1).php');
	endif;
}

function lerArtigos($area){
	$handle = fopen("csv/people.csv", "r");
	$row = 0;
	while ($line = fgetcsv($handle, 1000, ",")) {
		if ($row++ == 0) {
			continue;
		}
		
			$artigos[] = [
			'Area' => $line[0],
			'Resumo' => $line[1],
			'Autores' => $line[2],
			'Titulo' => $line[3],
			'Local' => $line[4],
			'Link' => $line[5]
		];
	}

	$sobre = array_keys(array_column($artigos, 'Area'), $area);

	for($i=0; $i<count($sobre); $i++){
		$artigosFiltered[$i] = $artigos[$sobre[$i]];
	}

	return ($artigosFiltered);
	fclose($handle);
}

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

function gera_titulos(){
	(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
	switch($pagina):
		case 'alunos':
			$titulo = 'Alunos - Laboratório Lamoam';
			break;
		case 'egressos':
			$titulo = 'Egressos - Laboratório Lamoam';
			break;
		default:
			$titulo = 'Laboratório Lamoam';
			break;
	endswitch;
	return $titulo;
}

?>