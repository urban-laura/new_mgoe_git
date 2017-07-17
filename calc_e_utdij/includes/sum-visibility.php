<?php

$sum_visibility = '';

if(!isset($_POST['submitted']) || ($_POST['fout'] == '' && $_POST['gyorsforgalmi'] == ''))
{
	$sum_visibility = 'invisible';
}

else
{
	$sum_visibility = '';
}

$output = str_replace('###sum-visibility###', $sum_visibility, $output);