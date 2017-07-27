<?php
if(isset($_POST['submitted']))
{
if($c_year == null)
{
	$output = str_replace('###c_year###', 'validation-error', $output);
}

if($c_month == null)
{
	$output = str_replace('###c_month###', 'validation-error', $output);
}

if($c_barrel == null)
{
	$output = str_replace('###c_barrel###', 'validation-error', $output);
}

if($c_env == null)
{
	$output = str_replace('###c_env###', 'validation-error', $output);
}

}

$message = '';

if($c_year == $n_year && $c_month > $n_month)
{
	$message1 = 'Az első forgalomba helyezés dátuma nem lehet későbbi mint az aktuális dátum.';
}

else
{
	$message1 = '';
}

$output = str_replace('###error1###', $message1, $output);
