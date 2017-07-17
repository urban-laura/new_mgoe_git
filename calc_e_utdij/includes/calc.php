<?php

$category = $_POST['category'];
$env = $_POST['env'];
$fout = $_POST['fout'];
$gyorsforgalmi = $_POST['gyorsforgalmi'];


$fout_dijak[] = array('category'=>'J2 (kéttengelyes)' , 'env'=>'A (EURO3 vagy jobb)', 'value'=>18.95);
$fout_dijak[] = array('category'=>'J2 (kéttengelyes)' , 'env'=>'B (EURO2)',           'value'=>22.29);
$fout_dijak[] = array('category'=>'J2 (kéttengelyes)' , 'env'=>'C (EURO1)',           'value'=>25.63);
$fout_dijak[] = array('category'=>'J3 (háromtengelyes)' , 'env'=>'A (EURO3 vagy jobb)', 'value'=>32.80);
$fout_dijak[] = array('category'=>'J3 (háromtengelyes)' , 'env'=>'B (EURO2)',           'value'=>38.59);
$fout_dijak[] = array('category'=>'J3 (háromtengelyes)' , 'env'=>'C (EURO1)',           'value'=>44.38);
$fout_dijak[] = array('category'=>'J4 (négy- vagy több tengelyes)' , 'env'=>'A (EURO3 vagy jobb)', 'value'=>56.78);
$fout_dijak[] = array('category'=>'J4 (négy- vagy több tengelyes)' , 'env'=>'B (EURO2)',           'value'=>70.98);
$fout_dijak[] = array('category'=>'J4 (négy- vagy több tengelyes)' , 'env'=>'C (EURO1)',           'value'=>85.18);

foreach($fout_dijak as $dij)
{
	if($category==$dij['category'] && $env==$dij['env'])
	{
		$fout_dij = $dij['value'];
		break;
	}
}


$gyorsforgalmi_dijak[] = array('category'=>'J2 (kéttengelyes)' , 'env'=>'A (EURO3 vagy jobb)', 'value'=>44.54);
$gyorsforgalmi_dijak[] = array('category'=>'J2 (kéttengelyes)' , 'env'=>'B (EURO2)',           'value'=>52.40);
$gyorsforgalmi_dijak[] = array('category'=>'J2 (kéttengelyes)' , 'env'=>'C (EURO1)',           'value'=>60.26);
$gyorsforgalmi_dijak[] = array('category'=>'J3 (háromtengelyes)' , 'env'=>'A (EURO3 vagy jobb)', 'value'=>62.49);
$gyorsforgalmi_dijak[] = array('category'=>'J3 (háromtengelyes)' , 'env'=>'B (EURO2)',           'value'=>73.52);
$gyorsforgalmi_dijak[] = array('category'=>'J3 (háromtengelyes)' , 'env'=>'C (EURO1)',           'value'=>84.55);
$gyorsforgalmi_dijak[] = array('category'=>'J4 (négy- vagy több tengelyes)' , 'env'=>'A (EURO3 vagy jobb)', 'value'=>91.04);
$gyorsforgalmi_dijak[] = array('category'=>'J4 (négy- vagy több tengelyes)' , 'env'=>'B (EURO2)',           'value'=>113.80);
$gyorsforgalmi_dijak[] = array('category'=>'J4 (négy- vagy több tengelyes)' , 'env'=>'C (EURO1)',           'value'=>136.56);

foreach($gyorsforgalmi_dijak as $dij)
{
	if($category==$dij['category'] && $env==$dij['env'])
	{
		$gyorsforgalmi_dij = $dij['value'];
		break;
	}
}


$f = $fout_dij * $fout;
$gy = $gyorsforgalmi_dij * $gyorsforgalmi;

$sum = $f + $gy;
$sum2 = number_format($sum, 0, '', ' ');
$debug['sum'] = $sum2;