<?php

$message = '';

if(isset($_POST['submitted']) && $days == '')
{
	$message = 'Nem adta meg a napok számát.';
}

$output = str_replace('###error###', $message, $output);
