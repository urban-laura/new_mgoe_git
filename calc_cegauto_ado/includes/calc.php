<?php

$power = $_POST['power'];
$env = $_POST['env'];


$ranges[] = array('power'=>'<=50', 'env'=>'0-4 (EURO1, EURO2)', 'value'=>16500);
$ranges[] = array('power'=>'51 - 90', 'env'=>'0-4 (EURO1, EURO2)', 'value'=>22000);
$ranges[] = array('power'=>'91 - 120', 'env'=>'0-4 (EURO1, EURO2)', 'value'=>33000);
$ranges[] = array('power'=>'>=121', 'env'=>'0-4 (EURO1, EURO2)', 'value'=>44000);
$ranges[] = array('power'=>'<=50', 'env'=>'6-10 (EURO3, EURO4)', 'value'=>8800);
$ranges[] = array('power'=>'51 - 90', 'env'=>'6-10 (EURO3, EURO4)', 'value'=>11000);
$ranges[] = array('power'=>'91 - 120', 'env'=>'6-10 (EURO3, EURO4)', 'value'=>22000);
$ranges[] = array('power'=>'>=121', 'env'=>'6-10 (EURO3, EURO4)', 'value'=>33000);
$ranges[] = array('power'=>'<=50', 'env'=>'5, 14-15 (EURO5, EURO6, Hibrid)', 'value'=>7700);
$ranges[] = array('power'=>'51 - 90', 'env'=>'5, 14-15 (EURO5, EURO6, Hibrid)', 'value'=>8800);
$ranges[] = array('power'=>'91 - 120', 'env'=>'5, 14-15 (EURO5, EURO6, Hibrid)', 'value'=>11000);
$ranges[] = array('power'=>'>=121', 'env'=>'5, 14-15 (EURO5, EURO6, Hibrid)', 'value'=>22000);

foreach ($ranges as $range)
{
	if($power==$range['power'] && $env==$range['env'])
	{
		$month = $range['value'];
		break;
	}
}

$month3 = $month * 3;

$year = $month * 12;

$month2 = number_format($month, 0, '', ' ');
$month32 = number_format($month3, 0, '', ' ');
$year2 = number_format($year, 0, '', ' ');

$debug['month'] = $month2;
$debug['month3'] = $month32;
$debug['year'] = $year2;