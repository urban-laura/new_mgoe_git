<?php
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

$m_year = $_POST['m_year'];
$m_month = $_POST['m_month'];
$m_barrel = $_POST['barrel_m'];

$n_year = (int)date('Y');
$n_month = (int)date('m');


if($n_month == $m_month)
{
	$h = (($n_year - $m_year) * 12) + 1;
}

if($n_month < $m_month)
{
	$ev = (($n_year - $m_year)- 1) * 12;
	$ho = ((12 - $m_month)+ 1) + $n_month;
	$h = $ev + $ho;
}

if($n_month > $m_month)
{
	$ev = ($n_year - $m_year) * 12;
	$ho = $n_month - $m_month;
	$h = $ev + $ho + 1;
}

$debug['month'] = $h;

$amounts[] = array('barrel'=>'<=80',      'value'=>20000);
$amounts[] = array('barrel'=>'81 - 125',  'value'=>95000);
$amounts[] = array('barrel'=>'126 - 500', 'value'=>135000);
$amounts[] = array('barrel'=>'501 - 900', 'value'=>180000);
$amounts[] = array('barrel'=>'>=901',     'value'=>230000);

foreach($amounts as $amount)
{
	if($m_barrel==$amount['barrel'])
	{
		$o = $amount['value'];
		break;
	}
}

$debug['amount'] = $o;

$ranges[] = array('month'=>1, 'value'=>0.97);
$ranges[] = array('month'=>2, 'value'=>0.94);
$ranges[] = array('month'=>3, 'value'=>0.92);
$ranges[] = array('month'=>4, 'value'=>0.90);
$ranges[] = array('month'=>5, 'value'=>0.88);
$ranges[] = array('month'=>6, 'value'=>0.86);
$ranges[] = array('month'=>7, 'value'=>0.85);
$ranges[] = array('month'=>8, 'value'=>0.84);
$ranges[] = array('month'=>9, 'value'=>0.83);
$ranges[] = array('month'=>10, 'value'=>0.82);
$ranges[] = array('month'=>11, 'value'=>0.81);
$ranges[] = array('month'=>12, 'value'=>0.80);
$ranges[] = array('month'=>13, 'value'=>0.7908);
$ranges[] = array('month'=>14, 'value'=>0.7816);
$ranges[] = array('month'=>15, 'value'=>0.7725);
$ranges[] = array('month'=>16, 'value'=>0.7633);
$ranges[] = array('month'=>17, 'value'=>0.7541);
$ranges[] = array('month'=>18, 'value'=>0.745);
$ranges[] = array('month'=>19, 'value'=>0.73583333);
$ranges[] = array('month'=>20, 'value'=>0.72666667);
$ranges[] = array('month'=>21, 'value'=>0.7175);
$ranges[] = array('month'=>22, 'value'=>0.70833333);
$ranges[] = array('month'=>23, 'value'=>0.69916667);
$ranges[] = array('month'=>24, 'value'=>0.69);
$ranges[] = array('month'=>25, 'value'=>0.68166667);
$ranges[] = array('month'=>26, 'value'=>0.67333333);
$ranges[] = array('month'=>27, 'value'=>0.665);
$ranges[] = array('month'=>28, 'value'=>0.65666667);
$ranges[] = array('month'=>29, 'value'=>0.64833333);
$ranges[] = array('month'=>30, 'value'=>0.64);
$ranges[] = array('month'=>31, 'value'=>0.63166667);
$ranges[] = array('month'=>32, 'value'=>0.62333333);
$ranges[] = array('month'=>33, 'value'=>0.615);
$ranges[] = array('month'=>34, 'value'=>0.60666667);
$ranges[] = array('month'=>35, 'value'=>0.59833333);
$ranges[] = array('month'=>36, 'value'=>0.59);
$ranges[] = array('month'=>37, 'value'=>0.58333333);
$ranges[] = array('month'=>38, 'value'=>0.57666667);
$ranges[] = array('month'=>39, 'value'=>0.57);
$ranges[] = array('month'=>40, 'value'=>0.56333333);
$ranges[] = array('month'=>41, 'value'=>0.55666667);
$ranges[] = array('month'=>42, 'value'=>0.55);
$ranges[] = array('month'=>43, 'value'=>0.543333);
$ranges[] = array('month'=>44, 'value'=>0.536667);
$ranges[] = array('month'=>45, 'value'=>0.53);
$ranges[] = array('month'=>46, 'value'=>0.523333);
$ranges[] = array('month'=>47, 'value'=>0.516667);
$ranges[] = array('month'=>48, 'value'=>0.51);
$ranges[] = array('month'=>49, 'value'=>0.504167);
$ranges[] = array('month'=>50, 'value'=>0.498333);
$ranges[] = array('month'=>51, 'value'=>0.4925);
$ranges[] = array('month'=>52, 'value'=>0.486667);
$ranges[] = array('month'=>53, 'value'=>0.480833);
$ranges[] = array('month'=>54, 'value'=>0.475);
$ranges[] = array('month'=>55, 'value'=>0.469167);
$ranges[] = array('month'=>56, 'value'=>0.463333);
$ranges[] = array('month'=>57, 'value'=>0.4575);
$ranges[] = array('month'=>58, 'value'=>0.451667);
$ranges[] = array('month'=>59, 'value'=>0.445833);
$ranges[] = array('month'=>60, 'value'=>0.44);
$ranges[] = array('month'=>61, 'value'=>0.435);
$ranges[] = array('month'=>62, 'value'=>0.43);
$ranges[] = array('month'=>63, 'value'=>0.425);
$ranges[] = array('month'=>64, 'value'=>0.42);
$ranges[] = array('month'=>65, 'value'=>0.415);
$ranges[] = array('month'=>66, 'value'=>0.41);
$ranges[] = array('month'=>67, 'value'=>0.405);
$ranges[] = array('month'=>68, 'value'=>0.40);
$ranges[] = array('month'=>69, 'value'=>0.395);
$ranges[] = array('month'=>70, 'value'=>0.39);
$ranges[] = array('month'=>71, 'value'=>0.385);
$ranges[] = array('month'=>72, 'value'=>0.38);
$ranges[] = array('month'=>73, 'value'=>0.375);
$ranges[] = array('month'=>74, 'value'=>0.37);
$ranges[] = array('month'=>75, 'value'=>0.365);
$ranges[] = array('month'=>76, 'value'=>0.36);
$ranges[] = array('month'=>77, 'value'=>0.355);
$ranges[] = array('month'=>78, 'value'=>0.35);
$ranges[] = array('month'=>79, 'value'=>0.345);
$ranges[] = array('month'=>80, 'value'=>0.34);
$ranges[] = array('month'=>81, 'value'=>0.335);
$ranges[] = array('month'=>82, 'value'=>0.33);
$ranges[] = array('month'=>83, 'value'=>0.325);
$ranges[] = array('month'=>84, 'value'=>0.32);
$ranges[] = array('month'=>85, 'value'=>0.316667);
$ranges[] = array('month'=>86, 'value'=>0.313333);
$ranges[] = array('month'=>87, 'value'=>0.31);
$ranges[] = array('month'=>88, 'value'=>0.306667);
$ranges[] = array('month'=>89, 'value'=>0.303333);
$ranges[] = array('month'=>90, 'value'=>0.30);
$ranges[] = array('month'=>91, 'value'=>0.296667);
$ranges[] = array('month'=>92, 'value'=>0.293333);
$ranges[] = array('month'=>93, 'value'=>0.29);
$ranges[] = array('month'=>94, 'value'=>0.286667);
$ranges[] = array('month'=>95, 'value'=>0.283333);
$ranges[] = array('month'=>96, 'value'=>0.28);
$ranges[] = array('month'=>97, 'value'=>0.276667);
$ranges[] = array('month'=>98, 'value'=>0.273333);
$ranges[] = array('month'=>99, 'value'=>0.27);
$ranges[] = array('month'=>100, 'value'=>0.266667);
$ranges[] = array('month'=>101, 'value'=>0.263333);
$ranges[] = array('month'=>102, 'value'=>0.26);
$ranges[] = array('month'=>103, 'value'=>0.256667);
$ranges[] = array('month'=>104, 'value'=>0.253333);
$ranges[] = array('month'=>105, 'value'=>0.25);
$ranges[] = array('month'=>106, 'value'=>0.246667);
$ranges[] = array('month'=>107, 'value'=>0.243333);
$ranges[] = array('month'=>108, 'value'=>0.24);
$ranges[] = array('month'=>109, 'value'=>0.2375);
$ranges[] = array('month'=>110, 'value'=>0.235);
$ranges[] = array('month'=>111, 'value'=>0.2325);
$ranges[] = array('month'=>112, 'value'=>0.23);
$ranges[] = array('month'=>113, 'value'=>0.2275);
$ranges[] = array('month'=>114, 'value'=>0.225);
$ranges[] = array('month'=>115, 'value'=>0.2225);
$ranges[] = array('month'=>116, 'value'=>0.22);
$ranges[] = array('month'=>117, 'value'=>0.2175);
$ranges[] = array('month'=>118, 'value'=>0.215);
$ranges[] = array('month'=>119, 'value'=>0.2125);
$ranges[] = array('month'=>120, 'value'=>0.21);
$ranges[] = array('month'=>121, 'value'=>0.2075);
$ranges[] = array('month'=>122, 'value'=>0.205);
$ranges[] = array('month'=>123, 'value'=>0.2025);
$ranges[] = array('month'=>124, 'value'=>0.20);
$ranges[] = array('month'=>125, 'value'=>0.1975);
$ranges[] = array('month'=>126, 'value'=>0.195);
$ranges[] = array('month'=>127, 'value'=>0.1925);
$ranges[] = array('month'=>128, 'value'=>0.19);
$ranges[] = array('month'=>129, 'value'=>0.1875);
$ranges[] = array('month'=>130, 'value'=>0.185);
$ranges[] = array('month'=>131, 'value'=>0.1825);
$ranges[] = array('month'=>132, 'value'=>0.18);
$ranges[] = array('month'=>133, 'value'=>0.1775);
$ranges[] = array('month'=>134, 'value'=>0.175);
$ranges[] = array('month'=>135, 'value'=>0.1725);
$ranges[] = array('month'=>136, 'value'=>0.17);
$ranges[] = array('month'=>137, 'value'=>0.1675);
$ranges[] = array('month'=>138, 'value'=>0.165);
$ranges[] = array('month'=>139, 'value'=>0.1625);
$ranges[] = array('month'=>140, 'value'=>0.16);
$ranges[] = array('month'=>141, 'value'=>0.1575);
$ranges[] = array('month'=>142, 'value'=>0.155);
$ranges[] = array('month'=>143, 'value'=>0.1525);
$ranges[] = array('month'=>144, 'value'=>0.15);
$ranges[] = array('month'=>145, 'value'=>0.14833);
$ranges[] = array('month'=>146, 'value'=>0.14667);
$ranges[] = array('month'=>147, 'value'=>0.145);
$ranges[] = array('month'=>148, 'value'=>0.14333);
$ranges[] = array('month'=>149, 'value'=>0.14167);
$ranges[] = array('month'=>150, 'value'=>0.14);
$ranges[] = array('month'=>151, 'value'=>0.13833);
$ranges[] = array('month'=>152, 'value'=>0.13667);
$ranges[] = array('month'=>153, 'value'=>0.135);
$ranges[] = array('month'=>154, 'value'=>0.13333);
$ranges[] = array('month'=>155, 'value'=>0.13167);
$ranges[] = array('month'=>156, 'value'=>0.13);
$ranges[] = array('month'=>157, 'value'=>0.12833);
$ranges[] = array('month'=>158, 'value'=>0.12667);
$ranges[] = array('month'=>159, 'value'=>0.125);
$ranges[] = array('month'=>160, 'value'=>0.12333);
$ranges[] = array('month'=>161, 'value'=>0.12167);
$ranges[] = array('month'=>162, 'value'=>0.12);
$ranges[] = array('month'=>163, 'value'=>0.11833);
$ranges[] = array('month'=>164, 'value'=>0.11667);
$ranges[] = array('month'=>165, 'value'=>0.115);
$ranges[] = array('month'=>166, 'value'=>0.1133333333);
$ranges[] = array('month'=>167, 'value'=>0.1116666667);
$ranges[] = array('month'=>168, 'value'=>0.11);

foreach ($ranges as $range)
{
	if($h==$range['month'])
	{
		$sum = $o * $range['value'];
		break;
	}
}

if($h>=169)
{
	$sum = $o * 0.1;
}


$sum2 = number_format($sum, 0, '', ' ');

$debug['sum'] = $sum2;