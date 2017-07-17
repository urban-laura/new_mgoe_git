<?php
$or = array('LE', 'kW');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['or_mibol'];
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

$output = str_replace('###mibol-options###', $options, $output);