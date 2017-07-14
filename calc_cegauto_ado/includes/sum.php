<?php

$month_value = '';
$month3_value = '';
$year_value = '';

if(isset($_POST['submitted']))
{
	$month_value = $debug['month'];
	$month3_value = $debug['month3'];
	$year_value = $debug['year'];
}

else
{
	$month_value = '';
	$month3_value = '';
	$year_value = '';
}

$output = str_replace('###month-value###', $month_value, $output);
$output = str_replace('###month3-value###', $month3_value, $output);
$output = str_replace('###year-value###', $year_value, $output);
