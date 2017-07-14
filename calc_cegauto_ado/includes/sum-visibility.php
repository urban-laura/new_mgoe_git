<?php

$sum_visibility = '';

if(!isset($_POST['submitted']))
{
	$sum_visibility = 'invisible';
}

else
{
	$sum_visibility = '';
}

$output = str_replace('###sum-visibility###', $sum_visibility, $output);