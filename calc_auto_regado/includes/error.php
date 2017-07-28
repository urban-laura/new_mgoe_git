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

	if($c_year == $n_year && $c_month > $n_month)
	{
		$output = str_replace('###c_year###', 'validation-error', $output);
		$output = str_replace('###c_month###', 'validation-error', $output);
	}

}


$message1 = '';
$message2 = '';

if($c_year == $n_year && $c_month > $n_month)
{
	$message1 = 'Az első forgalomba helyezés dátuma nem lehet későbbi mint az aktuális dátum.';
}

if(isset($_POST['submitted']) && $_POST['fuel'] != 'hibrid' && ($c_year == null || $c_month == null || $c_barrel == null || $c_env == null))
{
	$message2 = 'Kérem töltse ki az összes mezőt.';
}

if(isset($_POST['submitted']) && $_POST['fuel'] == 'hibrid' && ($c_year == null || $c_month == null))
{
	$message2 = 'Kérem töltse ki az összes mezőt.';
}

$output = str_replace('###error1###', $message1, $output);
$output = str_replace('###error2###', $message2, $output);