<?php

// choose right css
if(isset($_GET['css'])) 
{
	if (file_exists('../calc_css/calc_' . $_GET['css'] . '.css')) 
	{
	  $output = str_replace('###css-source###', '_' . $_GET['css'], $output);
	}
	else 
	{
		$output = str_replace('###css-source###', '', $output);
	}
	
	if (file_exists('css/eredet_' . $_GET['css'] . '.css')) 
	{
	  $output = str_replace('###eredet-css-source###', '_' . $_GET['css'], $output);
	}
	else 
	{
		$output = str_replace('###eredet-css-source###', '', $output);
	}
}
else 
{
	$output = str_replace('###eredet-css-source###', '', $output);
	$output = str_replace('###css-source###', '', $output);
}