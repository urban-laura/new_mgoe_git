<?php

$sum_visibility = '';

if(!isset($_POST['submitted']) || ($_POST['teljesitmeny'] == '' || $_POST['teljesitmeny'] < 16))
{
	$sum_visibility = 'invisible';
}

else
{
	$sum_visibility = '';
}

$output = str_replace('###sum-visibility###', $sum_visibility, $output);