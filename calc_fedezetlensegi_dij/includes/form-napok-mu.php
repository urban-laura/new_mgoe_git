<?php
$value = '';

if(isset($_POST['mu_napok']))
{
	$value=$_POST['mu_napok'];
}

else
{
	$value='';
}

$output = str_replace('###mu_napok###', $value, $output);