<?php
$value = '';

if(isset($_POST['teljesitmeny']))
{
	$value=$_POST['teljesitmeny'];
}

else
{
	$value='';
}

$output = str_replace('###teljesitmeny###', $value, $output);