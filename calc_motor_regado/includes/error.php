<?php
if(isset($_POST['submitted']))
{
	if($m_year == null)
	{
		$output = str_replace('###m_year###', 'validation-error', $output);
	}

	if($m_month == null)
	{
		$output = str_replace('###m_month###', 'validation-error', $output);
	}

	if($m_barrel == null)
	{
		$output = str_replace('###m_barrel###', 'validation-error', $output);
	}

	if($m_year == $n_year && $m_month > $n_month)
	{
		$output = str_replace('###m_year###', 'validation-error', $output);
		$output = str_replace('###m_month###', 'validation-error', $output);
	}

}

$message1 = '';
$message2 = '';

if($m_year == $n_year && $m_month > $n_month)
{
	$message1 = 'Az első forgalomba helyezés dátuma nem lehet későbbi mint az aktuális dátum.';
}

if(isset($_POST['submitted']) && ($m_year == null || $m_month == null || $m_barrel == null))
{
	$message2 = 'Kérem töltse ki az összes mezőt.';
}

$output = str_replace('###error1###', $message1, $output);
$output = str_replace('###error2###', $message2, $output);