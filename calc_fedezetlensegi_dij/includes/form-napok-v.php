<?php
$value = '';

if(isset($_POST['v_napok']))
{
	$value=$_POST['v_napok'];
}

else
{
	$value='';
}

$output = str_replace('###v_napok###', $value, $output);