<?php

$sum_value = 0;

if(isset($_POST['submitted']) && $teljesitmeny != '')
{
	$sum_value = $debug['sum'] = $sum2;
}

$output = str_replace('###sum###', $sum_value, $output);