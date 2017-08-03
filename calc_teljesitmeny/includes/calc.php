<?php

// choose right css
if(isset($_GET['css'])) 
{
	if (file_exists('../calc_css/calc_' . $_GET['css'] . '.css')) 
	{
	  $output = str_replace('###css-source###', '_' . $_GET['css'], $output);
	}
	else 
	{
		$output = str_replace('###css-source###', '', $output);
	}
	
	if (file_exists('css/teljesitmeny_' . $_GET['css'] . '.css')) 
	{
	  $output = str_replace('###teljesitmeny-css-source###', '_' . $_GET['css'], $output);
	}
	else 
	{
		$output = str_replace('###teljesitmeny-css-source###', '', $output);
	}
}
else 
{
	$output = str_replace('###teljesitmeny-css-source###', '', $output);
	$output = str_replace('###css-source###', '', $output);
}

$year = $_POST['year'];
$teljesitmeny = $_POST['teljesitmeny'];

$n_year = (int)date('Y');

$t_year = $n_year - $year;


if(isset($_POST['kw']))
{
	$kw = $teljesitmeny;
}

if(isset($_POST['le']))
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
