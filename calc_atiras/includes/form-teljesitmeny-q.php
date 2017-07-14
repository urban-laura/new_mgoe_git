<?php
$value = '';

if(isset($_POST['q_teljesitmeny']))
{
	$value=$_POST['q_teljesitmeny'];
}

else
{
	$value='';
}

$output = str_replace('###q_teljesitmeny###', $value, $output);