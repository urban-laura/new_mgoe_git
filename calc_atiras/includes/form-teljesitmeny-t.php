<?php
$value = '';

if(isset($_POST['t_teljesitmeny']))
{
	$value=$_POST['t_teljesitmeny'];
}

else
{
	$value='';
}

$output = str_replace('###t_teljesitmeny###', $value, $output);