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
	
	if (file_exists('css/regado_' . $_GET['css'] . '.css')) 
	{
	  $output = str_replace('###regado-css-source###', '_' . $_GET['css'], $output);
	}
	else 
	{
		$output = str_replace('###regado-css-source###', '', $output);
	}
}
else 
{
	$output = str_replace('###regado-css-source###', '', $output);
	$output = str_replace('###css-source###', '', $output);
}

if(!isset($_POST['fuel']) || $_POST['fuel']=='benzin')
{
	$c_year = $_POST['c_year_b'];
	$c_month = $_POST['c_month_b'];
	$c_barrel = $_POST['barrel_b'];
	$c_env = $_POST['env_b'];
}

if($_POST['fuel']=='dizel')
{
	$c_year = $_POST['c_year_d'];
	$c_month = $_POST['c_month_d'];
	$c_barrel = $_POST['barrel_d'];
	$c_env = $_POST['env_d'];
}

if($_POST['fuel']=='hibrid')
{
	$c_year = $_POST['c_year_h'];
	$c_month = $_POST['c_month_h'];
}

if (isset($_POST['api']) && $_POST['api'] == 1) {
	
	$c_year = $_POST['year'];
	$c_month = $_POST['month'];
	$c_barrel = $_POST['barrel'];
	$c_env = $_POST['env'];
}

$n_year = (int)date('Y');
$n_month = (int)date('m');


if($n_month == $c_month)
{
	$h = (($n_year - $c_year) * 12) + 1;
}

if($n_month < $c_month)
{
	$ev = (($n_year - $c_year)- 1) * 12;
	$ho = ((12 - $c_month)+ 1) + $n_month;
	$h = $ev + $ho;
}

if($n_month > $c_month)
{
	$ev = ($n_year - $c_year) * 12;
	$ho = $n_month - $c_month;
	$h = $ev + $ho + 1;
}

$debug['month'] = $h;

$amounts[] = array('barrel_b'=>'<=1100', 'barrel_d'=>'<=1300', 'env'=>'EURO5', 'value'=>45000);
$amounts[] = array('barrel_b'=>'1101 - 1400', 'barrel_d'=>'1301 - 1500', 'env'=>'EURO5', 'value'=>65000);
$amounts[] = array('barrel_b'=>'1401 - 1600', 'barrel_d'=>'1501 - 1700', 'env'=>'EURO5', 'value'=>85000);
$amounts[] = array('barrel_b'=>'1601 - 1800', 'barrel_d'=>'1701 - 2000', 'env'=>'EURO5', 'value'=>135000);
$amounts[] = array('barrel_b'=>'1801 - 2000', 'barrel_d'=>'2001 - 2500', 'env'=>'EURO5', 'value'=>185000);
$amounts[] = array('barrel_b'=>'2001 - 2500', 'barrel_d'=>'2501 - 3000', 'env'=>'EURO5', 'value'=>265000);
$amounts[] = array('barrel_b'=>'>=2501', 'barrel_d'=>'>=3001', 'env'=>'EURO5', 'value'=>400000);
$amounts[] = array('barrel_b'=>'<=1100', 'barrel_d'=>'<=1300', 'env'=>'EURO4', 'value'=>180000);
$amounts[] = array('barrel_b'=>'1101 - 1400', 'barrel_d'=>'1301 - 1500', 'env'=>'EURO4', 'value'=>260000);
$amounts[] = array('barrel_b'=>'1401 - 1600', 'barrel_d'=>'1501 - 1700', 'env'=>'EURO4', 'value'=>340000);
$amounts[] = array('barrel_b'=>'1601 - 1800', 'barrel_d'=>'1701 - 2000', 'env'=>'EURO4', 'value'=>540000);
$amounts[] = array('barrel_b'=>'1801 - 2000', 'barrel_d'=>'2001 - 2500', 'env'=>'EURO4', 'value'=>740000);
$amounts[] = array('barrel_b'=>'2001 - 2500', 'barrel_d'=>'2501 - 3000', 'env'=>'EURO4', 'value'=>1060000);
$amounts[] = array('barrel_b'=>'>=2501', 'barrel_d'=>'>=3001', 'env'=>'EURO4', 'value'=>1600000);
$amounts[] = array('barrel_b'=>'<=1100', 'barrel_d'=>'<=1300', 'env'=>'EURO3', 'value'=>270000);
$amounts[] = array('barrel_b'=>'1101 - 1400', 'barrel_d'=>'1301 - 1500', 'env'=>'EURO3', 'value'=>390000);
$amounts[] = array('barrel_b'=>'1401 - 1600', 'barrel_d'=>'1501 - 1700', 'env'=>'EURO3', 'value'=>510000);
$amounts[] = array('barrel_b'=>'1601 - 1800', 'barrel_d'=>'1701 - 2000', 'env'=>'EURO3', 'value'=>810000);
$amounts[] = array('barrel_b'=>'1801 - 2000', 'barrel_d'=>'2001 - 2500', 'env'=>'EURO3', 'value'=>1110000);
$amounts[] = array('barrel_b'=>'2001 - 2500', 'barrel_d'=>'2501 - 3000', 'env'=>'EURO3', 'value'=>1590000);
$amounts[] = array('barrel_b'=>'>=2501', 'barrel_d'=>'>=3001', 'env'=>'EURO3', 'value'=>2400000);
$amounts[] = array('barrel_b'=>'<=1100', 'barrel_d'=>'<=1300', 'env'=>'EURO2', 'value'=>360000);
$amounts[] = array('barrel_b'=>'1101 - 1400', 'barrel_d'=>'1301 - 1500', 'env'=>'EURO2', 'value'=>520000);
$amounts[] = array('barrel_b'=>'1401 - 1600', 'barrel_d'=>'1501 - 1700', 'env'=>'EURO2', 'value'=>680000);
$amounts[] = array('barrel_b'=>'1601 - 1800', 'barrel_d'=>'1701 - 2000', 'env'=>'EURO2', 'value'=>1080000);
$amounts[] = array('barrel_b'=>'1801 - 2000', 'barrel_d'=>'2001 - 2500', 'env'=>'EURO2', 'value'=>1480000);
$amounts[] = array('barrel_b'=>'2001 - 2500', 'barrel_d'=>'2501 - 3000', 'env'=>'EURO2', 'value'=>2120000);
$amounts[] = array('barrel_b'=>'>=2501', 'barrel_d'=>'>=3001', 'env'=>'EURO2', 'value'=>3200000);
$amounts[] = array('barrel_b'=>'<=1100', 'barrel_d'=>'<=1300', 'env'=>'EURO1', 'value'=>540000);
$amounts[] = array('barrel_b'=>'1101 - 1400', 'barrel_d'=>'1301 - 1500', 'env'=>'EURO1', 'value'=>780000);
$amounts[] = array('barrel_b'=>'1401 - 1600', 'barrel_d'=>'1501 - 1700', 'env'=>'EURO1', 'value'=>1020000);
$amounts[] = array('barrel_b'=>'1601 - 1800', 'barrel_d'=>'1701 - 2000', 'env'=>'EURO1', 'value'=>1620000);
$amounts[] = array('barrel_b'=>'1801 - 2000', 'barrel_d'=>'2001 - 2500', 'env'=>'EURO1', 'value'=>2220000);
$amounts[] = array('barrel_b'=>'2001 - 2500', 'barrel_d'=>'2501 - 3000', 'env'=>'EURO1', 'value'=>3180000);
$amounts[] = array('barrel_b'=>'>=2501', 'barrel_d'=>'>=3001', 'env'=>'EURO1', 'value'=>4800000);

foreach($amounts as $amount)
{
	if(($c_barrel==$amount['barrel_b'] || $c_barrel==$amount['barrel_d']) && $c_env==$amount['env'])
	{
		$o = $amount['value'];
		break;
	}
}

if($_POST['fuel']=='hibrid')
{
	$o = 76000;
}

$debug['amount'] = $o;

$ranges[] = array('min'=>2, 'max'=>4, 'value'=>0.06);
$ranges[] = array('min'=>4, 'max'=>6, 'value'=>0.1);
$ranges[] = array('min'=>6, 'max'=>12, 'value'=>0.14);
$ranges[] = array('min'=>12, 'max'=>24, 'value'=>0.2);
$ranges[] = array('min'=>24, 'max'=>36, 'value'=>0.31);
$ranges[] = array('min'=>36, 'max'=>48, 'value'=>0.41);
$ranges[] = array('min'=>48, 'max'=>60, 'value'=>0.49);
$ranges[] = array('min'=>60, 'max'=>72, 'value'=>0.56);
$ranges[] = array('min'=>72, 'max'=>84, 'value'=>0.62);
$ranges[] = array('min'=>84, 'max'=>96, 'value'=>0.68);
$ranges[] = array('min'=>96, 'max'=>108, 'value'=>0.72);
$ranges[] = array('min'=>108, 'max'=>120, 'value'=>0.76);
$ranges[] = array('min'=>120, 'max'=>132, 'value'=>0.79);
$ranges[] = array('min'=>132, 'max'=>144, 'value'=>0.82);
$ranges[] = array('min'=>144, 'max'=>156, 'value'=>0.85);
$ranges[] = array('min'=>156, 'max'=>168, 'value'=>0.89);


foreach ($ranges as $range)
{
	if($h>=$range['min'] && $h<$range['max'])
	{
		$sz = $o * $range['value'];
		$sum = $o - $sz;
		break;
	}
}

if($h>=169)
{
	$sz = $o * 0.90;
	$sum = $o - $sz;
}

if($h == 1)
{
	$sum = $o;
}

$sum2 = number_format($sum, 0, '', ' ');

$debug['sum'] = $sum2;

if ($_POST['fuel'] == 'elektromos') {
  	$sum2 = 0;
  }

if (isset($_POST['api']) && $_POST['api'] == 1) {
  print 'A' . $sum2;
}

