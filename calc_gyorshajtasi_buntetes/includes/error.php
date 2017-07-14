<?php

$message1 = '';
$message2 = '';

if(isset($_POST['submitted']) && $sebesseghatar == '')
{
	$message1 = 'Nem adta meg a sebességhatárt.';
}

if(isset($_POST['submitted']) && $on_sebessege == '')
{
	$message2 = 'Nem adta meg az Ön sebességét.';
}

$output = str_replace('###error1###', $message1, $output);
$output = str_replace('###error2###', $message2, $output);