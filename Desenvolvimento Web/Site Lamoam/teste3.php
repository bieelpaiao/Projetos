<?php
$handle = fopen("csv/people.csv", "r");
$row = 0;
while ($line = fgetcsv($handle, 1000, ",")) {
	if ($row++ == 0) {
		continue;
	}
	
	$people[] = [
		'nome' => $line[0],
		'site' => $line[1],
		'telefone' => $line[2],
		'idade' => $line[3]
	];
}
print_r($people);
fclose($handle);
?>