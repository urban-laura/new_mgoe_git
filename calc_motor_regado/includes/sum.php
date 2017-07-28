<?php

$sum = $debug['sum'];
$month = $debug['month'];

if(!isset($_POST['submitted']))
{
	$sum = 0;
	$month = 0;
}

$output = str_replace('###month###', $month, $output);
$output = str_replace('###sum###', $sum, $output);