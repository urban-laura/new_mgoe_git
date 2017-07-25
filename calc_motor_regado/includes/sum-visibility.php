<?php

$sum_visibility = '';

if(!isset($_POST['submitted']) || ($m_year == $n_year && $m_month > $n_month))
{
	$sum_visibility = 'invisible';
}

else
{
	$sum_visibility = '';
}

$output = str_replace('###sum-visibility###', $sum_visibility, $output);