<?php
$vagyonszerzesi_value = '';

if(isset($_POST['submitted']) && ($teljesitmeny != '' || $teljesitmeny > 15))
{
	$vagyonszerzesi_value = $debug['vagyonszerzesi'];
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
