<?php

/*
	X| |0
	0|0|
	 |X|X
*/

$player = 'X';
$array = [];

$array[0][0]  = 'X';  
$array[0][1]  = ' '; 
$array[0][2]  = '0';

$array[1][0]  = '0';  
$array[1][1]  = ' '; 
$array[1][2]  = '0';

$array[2][0]  = ' ';  
$array[2][1]  = 'X'; 
$array[2][2]  = 'X';

displayBaord($array);

didWin('X', $array);
exit;

makeamove($array, 0, 1, 'X');

displayBaord($array);

function didWin($player, $array) {

	$max_row = 3;
	$max_col = 3;

	// By rows 
	foreach ($array as $row => $row_data) {

		foreach ($row_data as $col  => $col_data) {
			$d = $array[$row][$col];

			if ($d != $player) {
				break;
			}

		}

		echo "Won: $row, $col\n";
		return true;
	}

	// By columns
	for ($c=0; $c<$max_col; $c++) {
		for ($r=0; $r<$max_row; $r++) {
			echo "$r - $c: {$array[$r][$c]} \n";	
		}	
	}

}

function displayBaord($array) {

		foreach ($array as $row => $row_data) {
			$buffer = [];	
			foreach ($row_data as $col  => $col_data) {
				$buffer[] = $array[$row][$col]; 
			}
			echo implode('|', $buffer);
			echo "\n";
		}

		echo "\n\n";
}

function makeamove(&$array, $row, $col, $data) {

	$max_row = 3;
	$max_col = 3;

	if (empty($row) || $row < 0 || $row > $max_row) {
		// bad move
	}

	if (empty($col)  || $col < 0 || $col > $max_col) {
		// bad move
	}

	if (!empty($array[$col][$row])) {
		// bad move
	}

	$array[$row][$col] = $data;

}
