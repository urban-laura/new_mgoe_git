<?php
$value = '';

if(isset($_POST['sz_teljesitmeny']))
{
	$value=$_POST['sz_teljesitmeny'];
}

else
{
	$value='';
}

$output = str_replace('###sz_teljesitmeny###', $value, $output);