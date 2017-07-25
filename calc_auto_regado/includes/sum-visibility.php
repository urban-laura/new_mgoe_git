<?php

$sum_visibility = '';

if(!isset($_POST['submitted']) || ($c_year == $n_year && $c_month > $n_month))
{
	$sum_visibility = 'invisible';
}

else
{
	$sum_visibility = '';
}

$output = str_replace('###sum-visibility###', $sum_visibility, $output);