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

$message = '';

if($c_year == $n_year && $c_month > $n_month)
{
	$message .= '<li><h5>Az első forgalomba helyezés dátuma nem lehet későbbi mint az aktuális dátum. </h5></li>';
}

if(isset($_POST['submitted']) && $_POST['fuel'] != 'hibrid' && ($c_year == null || $c_month == null || $c_barrel == null || $c_env == null))
{
	$message .= '<li><h5>Kérem töltse ki az összes mezőt. </h5></li>';
}

if(isset($_POST['submitted']) && $_POST['fuel'] == 'hibrid' && ($c_year == null || $c_month == null))
{
	$message .= '<li><h5>Kérem töltse ki az összes mezőt.</h5></li>';
}

$output = str_replace('###error###', $message, $output);