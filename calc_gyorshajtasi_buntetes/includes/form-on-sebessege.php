<?php
$value = '';

if(isset($_POST['on_sebessege']))
{
	$value=$_POST['on_sebessege'];
}

else
{
	$value='';
}

$output = str_replace('###on_sebessege###', $value, $output);