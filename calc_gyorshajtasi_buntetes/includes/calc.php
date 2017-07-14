<?php
$sebesseghatar = $_POST['sebesseghatar'];
$on_sebessege = $_POST['on_sebessege'];

$sebessegig = $on_sebessege - $sebesseghatar;

if($sebesseghatar <= 50)
{
	$ranges[] = array('min'=>15, 'max'=>25, 'value'=>30000);
	$ranges[] = array('min'=>25, 'max'=>35, 'value'=>45000);
	$ranges[] = array('min'=>35, 'max'=>45, 'value'=>60000);
	$ranges[] = array('min'=>45, 'max'=>55, 'value'=>90000);
	$ranges[] = array('min'=>55, 'max'=>65, 'value'=>130000);
	$ranges[] = array('min'=>65, 'max'=>75, 'value'=>200000);

	if($sebessegig > 75)
	{
		$sum = 300000;
	}
		
}

if($sebesseghatar > 50 && $sebesseghatar <= 100)
{
	$ranges[] = array('min'=>15, 'max'=>30, 'value'=>30000);
	$ranges[] = array('min'=>30, 'max'=>45, 'value'=>45000);
	$ranges[] = array('min'=>45, 'max'=>60, 'value'=>60000);
	$ranges[] = array('min'=>60, 'max'=>75, 'value'=>90000);
	$ranges[] = array('min'=>75, 'max'=>90, 'value'=>130000);
	$ranges[] = array('min'=>90, 'max'=>105, 'value'=>200000);

	if($sebessegig > 105)
	{
		$sum = 300000;
	}
		
}

if($sebesseghatar > 100)
{
	$ranges[] = array('min'=>20, 'max'=>35, 'value'=>30000);
	$ranges[] = array('min'=>35, 'max'=>50, 'value'=>45000);
	$ranges[] = array('min'=>50, 'max'=>65, 'value'=>60000);
	$ranges[] = array('min'=>65, 'max'=>80, 'value'=>90000);
	$ranges[] = array('min'=>80, 'max'=>95, 'value'=>130000);
	$ranges[] = array('min'=>95, 'max'=>110, 'value'=>200000);

	if($sebessegig > 110)
	{
		$sum = 300000;
	}
		
}

foreach ($ranges as $range)
{
	if($sebessegig>$range['min'] && $sebessegig<=$range['max'])
	{
		$sum = $range['value'];
	}
}

$sum2 = number_format($sum, 0, '', ' ');
$debug['sum'] = $sum2;