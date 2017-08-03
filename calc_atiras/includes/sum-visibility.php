<?php

$sum_visibility = '';


if(isset($_POST['submitted']) && $_POST['type'] == 'Személygépjármű' && ($year == null || $teljesitmeny == null || $barrel == null))
{
	$sum_visibility = 'invisible';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Motorkerékpár' && ($year == null || $teljesitmeny == null || $barrel == null))
{
	$sum_visibility = 'invisible';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Quad (négykerekű segédmotoros kerékpár)' && ($year == null || $teljesitmeny == null))
{
	$sum_visibility = 'invisible';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Kisteherautó (3,5t össztömegig)' && ($year == null || $teljesitmeny == null))
{
	$sum_visibility = 'invisible';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Tehergépkocsi' && ($year == null || $teljesitmeny == null || $tomeg == null))
{
	$sum_visibility = 'invisible';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Autóbusz' && ($year == null || $teljesitmeny == null || $szem_szam == null))
{
	$sum_visibility = 'invisible';
}

if(isset($_POST['submitted']) && $_POST['type'] == 'Pótkocsi' && ($kategoria == null || $tomeg == null))
{
	$sum_visibility = 'invisible';
}


$output = str_replace('###sum-visibility###', $sum_visibility, $output);