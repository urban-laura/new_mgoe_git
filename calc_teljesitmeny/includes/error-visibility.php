<?php

$error_visibility = '';

if(!isset($_POST['submitted']))
{
	$error_visibility = 'invisible';
}

if ($year != null && $teljesitmeny != null)
{
	$error_visibility = 'invisible';
}

$output = str_replace('###error-visibility###', $error_visibility, $output); 