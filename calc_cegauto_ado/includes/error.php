<?php
if(isset($_POST['submitted']))
{
	if($power == null)
	{
		$output = str_replace('###power###', 'validation-error', $output);
	}

	if($env == null)
	{
		$output = str_replace('###env###', 'validation-error', $output);
	}
}

$message = '';

if(isset($_POST['submitted']) && ($power == null || $env == null))
{
	$message = '<ul><li>Kérem, töltse ki az összes mezőt.</li></ul>';
}

$output = str_replace('###error###', $message, $output);
