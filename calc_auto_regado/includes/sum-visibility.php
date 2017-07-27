<?php

$sum_visibility = '';

if(isset($_POST['submitted']) && $_POST['fuel'] != 'hibrid' && ($c_year == null || $c_month == null || $c_barrel == null || $c_env == null))
{
	$sum_visibility = 'invisible';
}

if($_POST['fuel'] == 'hibrid' && ($c_year == null || $c_month == null ))
{
	$sum_visibility = 'invisible';
}

if($c_year == $n_year && $c_month > $n_month)
{
	$sum_visibility = 'invisible';
}

$output = str_replace('###sum-visibility###', $sum_visibility, $output);