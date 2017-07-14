<?php

$message = '';

if(isset($_POST['submitted']) && $teljesitmeny == '')
{
	$message = 'Nem adta meg az autója teljesítményét.';
}

$output = str_replace('###error###', $message, $output);
