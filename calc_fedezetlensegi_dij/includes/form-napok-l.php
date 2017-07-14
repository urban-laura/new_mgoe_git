<?php
$value = '';

if(isset($_POST['l_napok']))
{
	$value=$_POST['l_napok'];
}

else
{
	$value='';
}

$output = str_replace('###l_napok###', $value, $output);