<?php
if($_POST['type'] == 'Személygépjármű')
{
	$days = $_POST['sz_napok'];
	$power = $_POST['sz_teljesitmeny'];
	
	$amounts[] = array('x'=>'0 - 37',    'value'=>310);
	$amounts[] = array('x'=>'38 - 50',   'value'=>390);
	$amounts[] = array('x'=>'51 - 70',   'value'=>440);
	$amounts[] = array('x'=>'71 - 100',  'value'=>500);
	$amounts[] = array('x'=>'101 - 180', 'value'=>650);
	$amounts[] = array('x'=>'>=181',     'value'=>690);
	
	foreach($amounts as $amount)
	{
		if($power==$amount['x'])
		{
			$o = $amount['value'];
			break;
		}
	}
}	
	
if($_POST['type'] == 'Motorkerékpár')
{
	$days = $_POST['m_napok'];
	$power = $_POST['m_teljesitmeny'];
	
	$amounts[] = array('x'=>'1 - 12',  'value'=>50);
	$amounts[] = array('x'=>'13 - 35', 'value'=>80);
	$amounts[] = array('x'=>'36 - 70', 'value'=>150);
	$amounts[] = array('x'=>'>=71',    'value'=>230);
	
	foreach($amounts as $amount)
	{
		if($power==$amount['x'])
		{
			$o = $amount['value'];
			break;
		}
	}
}	

if($_POST['type'] == 'Quad (négykerekű segédmotoros kerékpár)')
{
	$days = $_POST['q_napok'];
	$o = 120;
}	

if($_POST['type'] == 'Autóbusz')
{
	$days = $_POST['a_napok'];
	$place = $_POST['ferohely'];
	
	$amounts[] = array('x'=>'10 - 19', 'value'=>430);
	$amounts[] = array('x'=>'20 - 42', 'value'=>940);
	$amounts[] = array('x'=>'43 - 79', 'value'=>940);
	$amounts[] = array('x'=>'>=80',    'value'=>1930);
	
	foreach($amounts as $amount)
	{
		if($place==$amount['x'])
		{
			$o = $amount['value'];
			break;
		}
	}
}	

if($_POST['type'] == 'Trolibusz')
{
	$days = $_POST['tr_napok'];
	$o = 1290;
}	

if($_POST['type'] == 'Tehergépkocsi')
{
	$days = $_POST['t_napok'];
	$tomeg = $_POST['t_ossztomeg'];
	
	$amounts[] = array('x'=>'0 - 3500',     'value'=>540);
	$amounts[] = array('x'=>'3501 - 12000', 'value'=>940);
	$amounts[] = array('x'=>'>=12001',      'value'=>2420);
	
	foreach($amounts as $amount)
	{
		if($tomeg==$amount['x'])
		{
			$o = $amount['value'];
			break;
		}
	}
}	

if($_POST['type'] == 'Vontató')
{
	$days = $_POST['v_napok'];
	$o = 3020;
}	

if($_POST['type'] == 'Mezőgazdasági vontató')
{
	$days = $_POST['mv_napok'];
	$o = 120;
}	

if($_POST['type'] == 'Pótkocsi, félpótkocsi')
{
	$days = $_POST['p_napok'];
	$tomeg = $_POST['p_ossztomeg'];
	
	$amounts[] = array('x'=>'0 - 3500',     'value'=>540);
	$amounts[] = array('x'=>'3501 - 12000', 'value'=>940);
	$amounts[] = array('x'=>'>=12001',      'value'=>2420);
	
	foreach($amounts as $amount)
	{
		if($tomeg==$amount['x'])
		{
			$o = $amount['value'];
			break;
		}
	}
}	

if($_POST['type'] == 'Lassú jármű')
{
	$days = $_POST['l_napok'];
	$o = 120;
}	

if($_POST['type'] == 'Munkagép')
{
	$days = $_POST['mu_napok'];
	$o = 120;
}	

$sum = $days * $o;
$sum2 = number_format($sum, 0, '', ' ');
$debug['sum'] = $sum2;