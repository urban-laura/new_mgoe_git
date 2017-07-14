<?php
$value = '';

if(isset($_POST['sebesseghatar']))
{
	$value=$_POST['sebesseghatar'];
}

else
{
	$value='';
}

$output = str_replace('###sebesseghatar###', $value, $output);