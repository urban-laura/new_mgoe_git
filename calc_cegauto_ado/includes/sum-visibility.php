<?php

$sum_visibility = '';

if(isset($_POST['submitted']) && ($power == null || $env == null))
{
	$sum_visibility = 'invisible';
}

$output = str_replace('###sum-visibility###', $sum_visibility, $output);