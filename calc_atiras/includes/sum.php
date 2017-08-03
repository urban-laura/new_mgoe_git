<?php
$vagyonszerzesi_value = 0;
$forgalmi_value = 0;
$torzskonyv_value = 0;
$hatosagi_dij_value = 0;
$sum_value = 0;

if(isset($_POST['submitted']) && ($teljesitmeny != '' || $types == 'potkocsi'))
{
	$vagyonszerzesi_value = $debug['vagyonszerzesi'];
	$forgalmi_value = $debug['forgalmi'];
	$torzskonyv_value = $debug['torzskonyv'];
	$hatosagi_dij_value = $debug['hatosagi_dij'];
	$sum_value = $debug['sum'];
}

$output = str_replace('###vagyonszerzesi###', $vagyonszerzesi_value, $output);
$output = str_replace('###forgalmi###', $forgalmi_value, $output);
$output = str_replace('###torzskonyv###', $torzskonyv_value, $output);
$output = str_replace('###hatosagi_dij###', $hatosagi_dij_value, $output);
$output = str_replace('###sum###', $sum_value, $output);