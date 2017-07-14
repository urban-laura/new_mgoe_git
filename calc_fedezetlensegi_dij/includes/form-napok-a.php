<?php
$value = '';

if(isset($_POST['a_napok']))
{
	$value=$_POST['a_napok'];
}

else
{
	$value='';
}

$output = str_replace('###a_napok###', $value, $output);