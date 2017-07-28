<?php

$error_visibility = '';

if(!isset($_POST['submitted']))
{
	$error_visibility = 'invisible';
}

if ($m_year != null && $m_month != null && $m_barrel != null)
{
	$error_visibility = 'invisible';
}

if($m_year != null && $m_month != null)
{
	if($m_year == $n_year && $m_month > $n_month)
	{
		$error_visibility = '';
	}
}

$output = str_replace('###error-visibility###', $error_visibility, $output); 