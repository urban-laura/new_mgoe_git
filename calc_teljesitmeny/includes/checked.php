<?php
$kw_value = '';
$le_value = '';

$kw_visibility = '';
$le_visibility = '';

$p_kw_visibility = '';
$p_le_visibility = '';

if (!isset($_POST['submitted'])) 
{
	$kw_value = 'checked';
	$le_value = '';
	$kw_visibility = 'active';
	$le_visibility = 'inactive';
	$p_kw_visibility = 'p_active';
	$p_le_visibility = '';
}

if (isset($_POST['kw'])) 
{
	$kw_value = 'checked';
	$le_value = '';
	$kw_visibility = 'active';
	$le_visibility = 'inactive';
	$p_kw_visibility = 'p_active';
	$p_le_visibility = '';
}

if (isset($_POST['le'])) 
{
	$le_value = 'checked';
	$kw_value = '';
	$kw_visibility = 'inactive';
	$le_visibility = 'active';
	$p_le_visibility = 'p_active';
	$p_kw_visibility = '';
}

$output = str_replace('###kw###', $kw_value, $output);
$output = str_replace('###le###', $le_value, $output);

$output = str_replace('###kw-visibility###', $kw_visibility, $output);
$output = str_replace('###le-visibility###', $le_visibility, $output);

$output = str_replace('###p-kw-visibility###', $p_kw_visibility, $output);
$output = str_replace('###p-le-visibility###', $p_le_visibility, $output);