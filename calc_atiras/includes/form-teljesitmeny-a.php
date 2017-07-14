<?php
$value = '';

if(isset($_POST['a_teljesitmeny']))
{
	$value=$_POST['a_teljesitmeny'];
}

else
{
	$value='';
}

$output = str_replace('###a_teljesitmeny###', $value, $output);