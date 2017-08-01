<?php

$dijak_classes = array('Személygépjármű', 'Motorkerékpár', 'Kisteherautó (3,5t össztömegig)', 'Tehergépkocsi', 'Autóbusz', 'Mezőgazdasági vontató, lassú jármű', 'Pótkocsi');

$options = '';

foreach ($dijak_classes as $class)
{	
	$options .= '<option>' . $class . '</option>';
}

$output = str_replace('###hatosagi_dijak###', $options, $output);
