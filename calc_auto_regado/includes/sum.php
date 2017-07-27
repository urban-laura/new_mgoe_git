<?php

if($c_year != $n_year || $c_month <= $n_month)
{
	$sum = $debug['sum'];
	$month = $debug['month'];
}

$output = str_replace('###month###', $month, $output);
$output = str_replace('###sum###', $sum, $output);