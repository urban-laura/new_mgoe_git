<?php
$sum_value = '';

if(isset($_POST['submitted']) && (($sebesseghatar <= 50 && $sebessegig > 15) || (($sebesseghatar > 50 && $sebesseghatar <= 100) && $sebessegig > 15) || ($sebesseghatar > 100 && $sebessegig > 20)) && ($sebesseghatar != '' && $on_sebessege != ''))
{
	$sum_value ='Várható bírság: '. $debug['sum'] .' Ft';
}

if(isset($_POST['submitted']) && (($sebesseghatar <= 50 && $sebessegig <= 15) || (($sebesseghatar > 50 && $sebesseghatar <= 100) && $sebessegig <= 15) || ($sebesseghatar > 100 && $sebessegig <= 20)) && ($sebesseghatar != '' && $on_sebessege != ''))
{
	$sum_value = 'Nincs várható bírság.';
}

$output = str_replace('###sum###', $sum_value, $output);