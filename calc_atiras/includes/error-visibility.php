<?php

$error_visibility = '';

if(!isset($_POST['submitted']))
{
	$error_visibility = 'invisible';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Személygépjármű' && ($year != null && $teljesitmeny != null && $barrel != null))
{
	$error_visibility = 'invisible';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Motorkerékpár' && ($year != null && $teljesitmeny != null && $barrel != null))
{
	$error_visibility = 'invisible';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Quad (négykerekű segédmotoros kerékpár)' && ($year != null && $teljesitmeny != null))
{
	$error_visibility = 'invisible';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Kisteherautó (3,5t össztömegig)' && ($year != null && $teljesitmeny != null))
{
	$error_visibility = 'invisible';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Tehergépkocsi' && ($year != null && $teljesitmeny != null && $tomeg != null))
{
	$error_visibility = 'invisible';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Autóbusz' && ($year != null && $teljesitmeny != null && $szem_szam != null))
{
	$error_visibility = 'invisible';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Pótkocsi' && ($kategoria != null && $tomeg != null))
{
	$error_visibility = 'invisible';
}

$output = str_replace('###error-visibility###', $error_visibility, $output); 