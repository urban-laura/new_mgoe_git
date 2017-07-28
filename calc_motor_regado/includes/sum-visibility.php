<?php
$sum_visibility = '';

if(isset($_POST['submitted']) && ($m_year == null || $m_month == null || $m_barrel == null))
{
	$sum_visibility = 'invisible';
}

if($m_year == $n_year && $m_month > $n_month)
{
	$sum_visibility = 'invisible';
}

$output = str_replace('###sum-visibility###', $sum_visibility, $output);