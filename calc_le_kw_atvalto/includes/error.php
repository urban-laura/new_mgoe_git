<?php
$message = '';

if(isset($_POST['submitted']) && $_POST['number'] == '')
{
	$message = 'Adjon meg értéket.';
}

$output = str_replace('###error###', $message, $output);
