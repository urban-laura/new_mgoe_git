<?php
$sum_visibility = '';

if(!isset($_POST['submitted']) || $days == '')
{
	$sum_visibility = 'invisible';
}

$output = str_replace('###sum-visibility###', $sum_visibility, $output);