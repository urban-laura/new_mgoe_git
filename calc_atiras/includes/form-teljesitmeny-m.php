<?php
$value = '';

if(isset($_POST['m_teljesitmeny']))
{
	$value=$_POST['m_teljesitmeny'];
}

else
{
	$value='';
}

$output = str_replace('###m_teljesitmeny###', $value, $output);