<?php
$message = '';

if(isset($_POST['submitted']) && ($_POST['fout'] == '' && $_POST['gyorsforgalmi'] == ''))
{
	$message = 'Legalább az egyik megtett távolság mezőt töltse ki.';
}

$output = str_replace('###error###', $message, $output);