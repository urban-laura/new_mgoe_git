<?php
$value = '';

if(isset($_POST['gyorsforgalmi']))
{
	$value=$_POST['gyorsforgalmi'];
}

else
{
	$value='';
}

$output = str_replace('###gyorsforgalmi###', $value, $output);