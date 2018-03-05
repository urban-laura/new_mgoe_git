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
	
	if (file_exists('css/atiras_' . $_GET['css'] . '.css')) 
	{
	  $output = str_replace('###atiras-css-source###', '_' . $_GET['css'], $output);
	}
	else 
	{
		$output = str_replace('###atiras-css-source###', '', $output);
	}
}
else 
{
	$output = str_replace('###atiras-css-source###', '', $output);
	$output = str_replace('###css-source###', '', $output);
}

$year = $_POST['sz_year'];
$teljesitmeny = $_POST['sz_teljesitmeny'];
$barrel = $_POST['sz_barrel'];
$c_kw = $_POST['sz_kw'];
$c_le = $_POST['sz_le'];

$hatosagi_dijak[] = array('barrel'=>'<=1400',      'value'=>17000);
$hatosagi_dijak[] = array('barrel'=>'1401 - 2000', 'value'=>18500);
$hatosagi_dijak[] = array('barrel'=>'>=2001',      'value'=>20000);

foreach($hatosagi_dijak as $dij)
{
	if($barrel==$dij['barrel'])
	{
		$hatosagi_dij = $dij['value'];
		break;
	}
}

if($_POST['type'] == 'Személygépjármű')
{
	$year = $_POST['sz_year'];
	$teljesitmeny = $_POST['sz_teljesitmeny'];
	
	$barrel = $_POST['sz_barrel'];
	if ((int)$barrel !== 0) {
		if ($barrel <= 1400) {
		  $barrel = '<=1400';
		}
		if ($barrel > 1400 && $barrel <= 2000) {
		  $barrel = '1401 - 2000';
		}
		if ($barrel >= 2001 ) {
		  $barrel = '>=2001';
		}
	}
	
	$c_kw = $_POST['sz_kw'];
	$c_le = $_POST['sz_le'];

	$hatosagi_dijak[] = array('barrel'=>'<=1400',      'value'=>17000);
	$hatosagi_dijak[] = array('barrel'=>'1401 - 2000', 'value'=>18500);
	$hatosagi_dijak[] = array('barrel'=>'>=2001',      'value'=>20000);

	foreach($hatosagi_dijak as $dij)
	{
		if($barrel==$dij['barrel'])
		{
			$hatosagi_dij = $dij['value'];
			break;
		}
	}
}

if($_POST['type'] == 'Motorkerékpár')
{
	$year = $_POST['m_year'];
	$teljesitmeny = $_POST['m_teljesitmeny'];
	$barrel = $_POST['m_barrel'];
	$c_kw = $_POST['m_kw'];
	$c_le = $_POST['m_le'];

	$hatosagi_dijak[] = array('barrel'=>'<=500', 'value'=>15500);
	$hatosagi_dijak[] = array('barrel'=>'>500',  'value'=>17000);

	foreach($hatosagi_dijak as $dij)
	{
		if($barrel==$dij['barrel'])
		{
			$hatosagi_dij = $dij['value'];
			break;
		}
	}
}

if($_POST['type'] == 'Quad (négykerekű segédmotoros kerékpár)')
{
	$year = $_POST['q_year'];
	$teljesitmeny = $_POST['q_teljesitmeny'];
	$c_kw = $_POST['q_kw'];
	$c_le = $_POST['q_le'];
	
	$hatosagi_dij = 14000;
}

if($_POST['type'] == 'Kisteherautó (3,5t össztömegig)')
{
	$year = $_POST['k_year'];
	$teljesitmeny = $_POST['k_teljesitmeny'];
	$c_kw = $_POST['k_kw'];
	$c_le = $_POST['k_le'];
	
	$hatosagi_dij = 20000;
}

if($_POST['type'] == 'Tehergépkocsi')
{
	$year = $_POST['t_year'];
	$teljesitmeny = $_POST['t_teljesitmeny'];
	$tomeg = $_POST['tomeg'];
	$c_kw = $_POST['t_kw'];
	$c_le = $_POST['t_le'];

	$hatosagi_dijak[] = array('tomeg'=>'3,5t - 7,5t', 'value'=>21000);
	$hatosagi_dijak[] = array('tomeg'=>'>7,5t',       'value'=>22000);

	foreach($hatosagi_dijak as $dij)
	{
		if($tomeg==$dij['tomeg'])
		{
			$hatosagi_dij = $dij['value'];
			break;
		}
	}
}

if($_POST['type'] == 'Autóbusz')
{
	$year = $_POST['a_year'];
	$teljesitmeny = $_POST['a_teljesitmeny'];
	$szem_szam = $_POST['szem_szam'];
	$c_kw = $_POST['a_kw'];
	$c_le = $_POST['a_le'];

	$hatosagi_dijak[] = array('szem_szam'=>'<=20', 'value'=>21000);
	$hatosagi_dijak[] = array('szem_szam'=>'>20',  'value'=>22000);

	foreach($hatosagi_dijak as $dij)
	{
		if($szem_szam==$dij['szem_szam'])
		{
			$hatosagi_dij = $dij['value'];
			break;
		}
	}
}

if($_POST['type'] == 'Pótkocsi')
{
	$kategoria = $_POST['kategoria'];

	$hatosagi_dijak[] = array('kategoria'=>'Könnyű pótkocsi (össztömeg 750 kg-ig)',         'value'=>16000);
	$hatosagi_dijak[] = array('kategoria'=>'Nehéz pótkocsi (össztömeg 750 kg felett)',      'value'=>17500);
	$hatosagi_dijak[] = array('kategoria'=>'Különleges pótkocsi (felépítménnyel ellátott)', 'value'=>19000);

	foreach($hatosagi_dijak as $dij)
	{
		if($kategoria==$dij['kategoria'])
		{
			$hatosagi_dij = $dij['value'];
			break;
		}
	}
}

$n_year = (int)date('Y');
$c_year = $n_year - $year;

if(isset($c_kw))
{
	$kw = $teljesitmeny;
}

if(isset($c_le))
{
	$kw = $teljesitmeny * 0.745;
}

$kw2 = ceil($kw);

$v_illetekek[] = array('min_t'=>0,  'max_t'=>40,  'min_y'=>0, 'max_y'=>3, 'value'=>550);
$v_illetekek[] = array('min_t'=>0,  'max_t'=>40,  'min_y'=>4, 'max_y'=>8, 'value'=>450);
$v_illetekek[] = array('min_t'=>41, 'max_t'=>80,  'min_y'=>0, 'max_y'=>3, 'value'=>650);
$v_illetekek[] = array('min_t'=>41, 'max_t'=>80,  'min_y'=>4, 'max_y'=>8, 'value'=>550);
$v_illetekek[] = array('min_t'=>81, 'max_t'=>120, 'min_y'=>0, 'max_y'=>3, 'value'=>750);
$v_illetekek[] = array('min_t'=>81, 'max_t'=>120, 'min_y'=>4, 'max_y'=>8, 'value'=>650);

foreach ($v_illetekek as $illetek)
{
	if(($kw2>=$illetek['min_t'] && $kw2<=$illetek['max_t']) && ($c_year>=$illetek['min_y'] && $c_year<=$illetek['max_y']))
	{
		$v_illetek = $illetek['value'];
		break;
	}
}


$v_illetekek2[] = array('min_t'=>0, 'max_t'=>40,   'min'=>8, 'value'=>300);
$v_illetekek2[] = array('min_t'=>41, 'max_t'=>80,  'min'=>8, 'value'=>450);
$v_illetekek2[] = array('min_t'=>81, 'max_t'=>120, 'min'=>8, 'value'=>550);

foreach ($v_illetekek2 as $illetek)
{
	if(($kw2>=$illetek['min_t'] && $kw2<=$illetek['max_t']) && ($c_year>$illetek['min']))
	{
		$v_illetek = $illetek['value'];
		break;
	}
}

if(($kw2 > 120) && ($c_year >= 0 && $c_year <= 3))
{
$v_illetek = 850;
}

if(($kw2 > 120) && ($c_year >= 4 && $c_year <= 8))
{
$v_illetek = 750;
}

if($kw2 > 120 && $c_year > 8)
{
$v_illetek = 650;
}

$vagyonszerzesi = $v_illetek * $kw;

if($_POST['type'] == 'Pótkocsi')
{
	$vagyonszerzesi = '';
	$tomeg = $_POST['p_tomeg'];

	$illetek[] = array('tomeg'=>'<=2,5t', 'value'=>9000);
	$illetek[] = array('tomeg'=>'>2,5t',  'value'=>22000);

	foreach($illetek as $dij)
	{
		if($tomeg==$dij['tomeg'])
		{
			$vagyonszerzesi = $dij['value'];
			break;
		}
	}
}


$forgalmi = 6000;
$torzskonyv = 6000; 
$sum = $hatosagi_dij + $forgalmi + $torzskonyv + $vagyonszerzesi;

$forgalmi2 = number_format($forgalmi, 0, '', ' ');
$torzskonyv2 = number_format($torzskonyv, 0, '', ' ');
$vagyonszerzesi2 = number_format($vagyonszerzesi, 0, '', ' ');
$hatosagi_dij2 = number_format($hatosagi_dij, 0, '', ' ');
$sum2 = number_format($sum, 0, '', ' ');

$debug['forgalmi'] = $forgalmi2;
$debug['torzskonyv'] = $torzskonyv2;
$debug['vagyonszerzesi'] = $vagyonszerzesi2;
$debug['hatosagi_dij'] = $hatosagi_dij2;
$debug['sum'] = $sum2;

if (isset($_POST['api']) && $_POST['api'] == 1) {
  print $sum2;
}
