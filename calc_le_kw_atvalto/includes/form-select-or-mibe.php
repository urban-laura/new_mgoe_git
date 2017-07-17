<?php
$or = array('kW', 'LE');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['or_mibe'];
}

foreach ($or as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###mibe-options###', $options, $output);