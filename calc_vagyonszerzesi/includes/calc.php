<?php
$year = $_POST['year'];
$teljesitmeny = $_POST['teljesitmeny'];
$or = $_POST['or'];

$n_year = (int)date('Y');
$c_year = $n_year - $year;

if($or == 'kW')
{
$kw = $teljesitmeny;
}

if($or == 'LE')
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
$vagyonszerzesi2 = number_format($vagyonszerzesi, 0, '', ' ');

$debug['vagyonszerzesi'] = $vagyonszerzesi2;


