<?php

ini_set("display_errors", 1);

function recurring ($string){

	$array = str_split($string); 

	$recurringChar = "none" ; 

	$resultArray = array();

	$tab = array();

	$k = 0;

	for ($i=0; $i < sizeof($array); $i++) { 
		
		for ($j=0; $j < sizeof($array); $j++) { 

			if($i != $j){

				if($array[$i] == $array[$j])
				{
					$recurringChar = $array[$i];

					break 2;
				}
			}
		
	

		}
	}

	return $recurringChar; 

}

echo(recurring("dbcaba"));

?>