<?php

$sum_value = '';

if(isset($_POST['submitted']) && $_POST['number'] != '')
{
	$sum_value = $debug['sum'];
}

else
{
	$sum_value = '';
}

$output = str_replace('###sum###', $sum_value, $output);