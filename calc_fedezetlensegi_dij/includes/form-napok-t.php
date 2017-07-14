<?php
$value = '';

if(isset($_POST['t_napok']))
{
	$value=$_POST['t_napok'];
}

else
{
	$value='';
}

$output = str_replace('###t_napok###', $value, $output);