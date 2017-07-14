<?php
$value = '';

if(isset($_POST['mv_napok']))
{
	$value=$_POST['mv_napok'];
}

else
{
	$value='';
}

$output = str_replace('###mv_napok###', $value, $output);