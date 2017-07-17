<?php
$value = '';

if(isset($_POST['number']))
{
	$value=$_POST['number'];
}

else
{
	$value='';
}

$output = str_replace('###number###', $value, $output);