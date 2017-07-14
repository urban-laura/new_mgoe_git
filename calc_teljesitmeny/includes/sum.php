<?php

$sum_value = '';

if(isset($_POST['submitted']) && ($teljesitmeny != '' || $teljesitmeny > 15))
{
	$sum_value = $debug['sum'] = $sum2;
}

$output = str_replace('###sum###', $sum_value, $output);