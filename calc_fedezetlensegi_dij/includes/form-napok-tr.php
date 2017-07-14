<?php
$value = '';

if(isset($_POST['tr_napok']))
{
	$value=$_POST['tr_napok'];
}

else
{
	$value='';
}

$output = str_replace('###tr_napok###', $value, $output);