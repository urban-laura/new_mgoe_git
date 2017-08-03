<?php
if(isset($_POST['submitted']))
{
	if($year == null)
	{
		$output = str_replace('###year###', 'validation-error', $output);
	}

	if($teljesitmeny == null)
	{
		$output = str_replace('###power###', 'validation-error', $output);
	}
}

$message = '';

if(isset($_POST['submitted']) && ($year == null || $teljesitmeny == null))
{
	$message = '<ul><li>Kérem, töltse ki az összes mezőt.</li></ul>';
}

$output = str_replace('###error###', $message, $output);