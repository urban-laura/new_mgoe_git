<?php
$kw_value = '';
$le_value = '';

if (!isset($_POST['submitted'])) 
{
	$le_value = 'checked';
}

if (isset($_POST['kw'])) 
{
	$kw_value = 'checked';
}

if (isset($_POST['le'])) 
{
	$le_value = 'checked';
}

$output = str_replace('###kw###', $kw_value, $output);
$output = str_replace('###le###', $le_value, $output);