<?php

$year = $_POST['year'];
$teljesitmeny = $_POST['teljesitmeny'];
$or = $_POST['or'];

$n_year = (int)date('Y');

$t_year = $n_year - $year;


if($or == 'kW')
{
$kw = $teljesitmeny;
}

if($or == 'LE')
{
$kw = $teljesitmeny * 0.745;
}


$ranges[] = array('min'=>0, 'max'=>3, 'value'=>345);
$ranges[] = array('min'=>4, 'max'=>7, 'value'=>300);
$ranges[] = array('min'=>8, 'max'=>11, 'value'=>230);
$ranges[] = array('min'=>12, 'max'=>15, 'value'=>185);

foreach($ranges as $range)
{
	if($t_year>=$range['min'] && $t_year<=$range['max'])
	{
		$o = $range['value'];
		break;
	}
}

if($t_year>=16)
{
	$o = 140;
}

$sum = $o * $kw;
$sum2 = number_format($sum, 0, '', ' ');
$debug['sum'] = $sum2;
