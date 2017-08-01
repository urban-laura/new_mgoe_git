<?php

$error_visibility = '';

if(!isset($_POST['submitted']))
{
	$error_visibility = 'invisible';
}

if ($power != null && $env != null)
{
	$error_visibility = 'invisible';
}

$output = str_replace('###error-visibility###', $error_visibility, $output); 