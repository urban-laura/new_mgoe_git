<?php
if($_POST['or_mibol']=='LE' && $_POST['or_mibe']=='kW')
{
	$sum = $_POST['number'] * 0.745;
}

if($_POST['or_mibol']=='kW' && $_POST['or_mibe']=='LE')
{
	$sum = $_POST['number'] * 1.34;
}

if($_POST['or_mibol'] == $_POST['or_mibe'])
{
	$sum = $_POST['number'];
}

$sum2 = number_format($sum, 0, '', ' ');
$debug['sum'] = $sum2;