<?php
$value = '';

if(isset($_POST['fout']))
{
	$value=$_POST['fout'];
}

else
{
	$value='';
}

$output = str_replace('###fout###', $value, $output);