<?php
$value = '';

if(isset($_POST['m_napok']))
{
	$value=$_POST['m_napok'];
}

else
{
	$value='';
}

$output = str_replace('###m_napok###', $value, $output);