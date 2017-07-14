<?php
$value = '';

if(isset($_POST['p_napok']))
{
	$value=$_POST['p_napok'];
}

else
{
	$value='';
}

$output = str_replace('###p_napok###', $value, $output);