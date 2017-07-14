<?php
$tomeg = array('0 - 3500', '3501 - 12000', '>=12001');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['t_ossztomeg'];
}

foreach ($tomeg as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###ossztomeg-t-options###', $options, $output);