<?php
$value = '';

if(isset($_POST['k_teljesitmeny']))
{
	$value=$_POST['k_teljesitmeny'];
}

else
{
	$value='';
}

$output = str_replace('###k_teljesitmeny###', $value, $output);