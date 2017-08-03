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

	if($barrel == null)
	{
		$output = str_replace('###barrel###', 'validation-error', $output);
	}

	if($tomeg == null)
	{
		$output = str_replace('###tomeg###', 'validation-error', $output);
	}

	if($szem_szam == null)
	{
		$output = str_replace('###szem-szam###', 'validation-error', $output);
	}

	if($kategoria == null)
	{
		$output = str_replace('###kategoria###', 'validation-error', $output);
	}
}

$message = '';

if(isset($_POST['submitted']) && $_POST['type'] == 'Személygépjármű' && ($year == null || $teljesitmeny == null || $barrel == null))
{
	$message = '<ul><li>Kérem, töltse ki az összes mezőt.</li></ul>';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Motorkerékpár' && ($year == null || $teljesitmeny == null || $barrel == null))
{
	$message = '<ul><li>Kérem, töltse ki az összes mezőt.</li></ul>';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Quad (négykerekű segédmotoros kerékpár)' && ($year == null || $teljesitmeny == null))
{
	$message = '<ul><li>Kérem, töltse ki az összes mezőt.</li></ul>';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Kisteherautó (3,5t össztömegig)' && ($year == null || $teljesitmeny == null))
{
	$message = '<ul><li>Kérem, töltse ki az összes mezőt.</li></ul>';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Tehergépkocsi' && ($year == null || $teljesitmeny == null || $tomeg == null))
{
	$message = '<ul><li>Kérem, töltse ki az összes mezőt.</li></ul>';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Autóbusz' && ($year == null || $teljesitmeny == null || $szem_szam == null))
{
	$message = '<ul><li>Kérem, töltse ki az összes mezőt.</li></ul>';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Pótkocsi' && ($kategoria == null || $tomeg == null))
{
	$message = '<ul><li>Kérem, töltse ki az összes mezőt.</li></ul>';
}

$output = str_replace('###error###', $message, $output);
