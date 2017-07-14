<?php

$sum_visibility = '';

if(!isset($_POST['submitted']) || ($_POST['sebesseghatar'] == '' || $_POST['on_sebessege'] == ''))
{
	$sum_visibility = 'invisible';
}

$output = str_replace('###sum-visibility###', $sum_visibility, $output);