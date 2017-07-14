<?php

$sum_message = '';
$month_message = '';

if(isset($_POST['submitted']) && ($c_year != $n_year || $c_month <= $n_month))
{
	$month_message = 'Az első forgalomba helyezéstől</br>eltelt hónapok száma: ' . $debug['month'];

	$sum_message = 'A regisztrációs adó: ' . $debug['sum'] . ' Ft';
}

else
{
	$sum_message = '';
	$month_message = '';
}

$output = str_replace('###month-message###', $month_message, $output);
$output = str_replace('###sum-message###', $sum_message, $output);