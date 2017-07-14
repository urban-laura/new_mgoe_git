<?php
$value = '';

if(isset($_POST['q_napok']))
{
	$value=$_POST['q_napok'];
}

else
{
	$value='';
}

$output = str_replace('###q_napok###', $value, $output);