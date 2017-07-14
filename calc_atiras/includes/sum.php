<?php
$vagyonszerzesi_value = '';
$forgalmi_value = '';
$torzskonyv_value = '';
$hatosagi_dij_value = '';
$sum_value = '';

if(isset($_POST['submitted']) && ($teljesitmeny != '' || $types == 'potkocsi'))
{
	$vagyonszerzesi_value = $debug['vagyonszerzesi'];
	$forgalmi_value = $debug['forgalmi'];
	$torzskonyv_value = $debug['torzskonyv'];
	$hatosagi_dij_value = $debug['hatosagi_dij'];
	$sum_value = $debug['sum'];
}

else
{
	$vagyonszerzesi_value = '';
	$forgalmi_value = '';
	$torzskonyv_value = '';
	$hatosagi_dij_value = '';
	$sum_value = '';
}

$output = str_replace('###vagyonszerzesi###', $vagyonszerzesi_value, $output);
$output = str_replace('###forgalmi###', $forgalmi_value, $output);
$output = str_replace('###torzskonyv###', $torzskonyv_value, $output);
$output = str_replace('###hatosagi_dij###', $hatosagi_dij_value, $output);
$output = str_replace('###sum###', $sum_value, $output);