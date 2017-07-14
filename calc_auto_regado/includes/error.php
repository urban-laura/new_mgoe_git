<?php

$message = '';

if($c_year == $n_year && $c_month > $n_month)
{
	$message = 'Az első forgalomba helyezés dátuma</br>nem lehet későbbi,</br> mint az aktuális dátum.';
}

else
{
	$message = '';
}

$output = str_replace('###error###', $message, $output);
