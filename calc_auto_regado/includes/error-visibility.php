<?php

$error_visibility = '';

if(!isset($_POST['submitted']))
{
	$error_visibility = 'invisible';
}

if($_POST['fuel'] == 'hibrid' && ($c_year != null && $c_month != null))
{
	$error_visibility = 'invisible';
}

if ($c_year != null && $c_month != null && $c_barrel != null && $c_env != null)
{
	$error_visibility = 'invisible';
}

if($c_year != null && $c_month != null)
{
	if($c_year == $n_year && $c_month > $n_month)
	{
		$error_visibility = '';
	}
}

$output = str_replace('###error-visibility###', $error_visibility, $output); 