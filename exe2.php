<?php

$input = file('input.txt');
$result = 0;
foreach ($input as $lineNumber => $lineContent)
{
	$array = explode('x', $lineContent);	
	natsort($array);
	//reorganize keys
	$array = array_values($array);
	
	$l = $array[0];
	$h = $array[1];
	$w = $array[2];
	
	$result += $h*$l + 2*$l*$w + 2*$w*$h + 2*$h*$l;
}

echo $result;
?>
