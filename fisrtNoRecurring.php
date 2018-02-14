<?php

ini_set("display_errors", 1);

function recurring ($string){

	$array = str_split($string); 

	$recurringChar = "none" ;

	$tab = $a = array(); 

	$cpt = 0;

	for ($i=0; $i < sizeof($array); $i++) { 
		
		array_push($tab, $array[$i]);
	}

	for ($i=0; $i < sizeof($array); $i++) {

		for ($j=0; $j < sizeof($array); $j++) { 
			
			if ($i != $j) {
			
				if ($array[$i] != $tab[$j]) {
					
					$cpt ++; 

				}

			}
		}

		$a[$array[$i]] = $cpt; 

		$cpt = 0;

	}

	foreach ($a as $key => $value) {
		
		if ($value == sizeof($array) -1) {
			
			$recurringChar = $key;

			break;
		}
	}

	return $recurringChar;

}

echo(recurring("hhhjbcaba"));

?>