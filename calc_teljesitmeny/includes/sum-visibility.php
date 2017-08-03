<?php

$sum_visibility = '';

if(isset($_POST['submitted']) && ($year == null || $teljesitmeny == null))
{
	$sum_visibility = 'invisible';
}

$output = str_replace('###sum-visibility###', $sum_visibility, $output);