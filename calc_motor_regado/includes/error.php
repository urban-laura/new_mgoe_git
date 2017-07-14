<?php

$message = '';

if($m_year == $n_year && $m_month > $n_month)
{
	$message = 'Az első forgalomba helyezés dátuma</br>nem lehet későbbi,</br> mint az aktuális dátum.';
}

else
{
	$message = '';
}

$output = str_replace('###error###', $message, $output);
