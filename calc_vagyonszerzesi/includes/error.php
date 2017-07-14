<?php

$message = '';

if(isset($_POST['submitted']) && $_POST['teljesitmeny'] == '')
{
	$message = 'Nem adta meg az autója teljesítményét.';
}

if(isset($_POST['teljesitmeny']) && $_POST['teljesitmeny'] != '' && $_POST['teljesitmeny'] < 16)
{
	$message = 'Túl kicsi a teljesítmény.';
}

$output = str_replace('###error###', $message, $output);
