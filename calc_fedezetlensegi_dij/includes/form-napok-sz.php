<?php
$value = '';

if(isset($_POST['sz_napok']))
{
	$value=$_POST['sz_napok'];
}

else
{
	$value='';
}

$output = str_replace('###sz_napok###', $value, $output);