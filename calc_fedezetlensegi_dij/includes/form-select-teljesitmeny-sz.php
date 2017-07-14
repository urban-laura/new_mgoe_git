<?php
$power = array('0 - 37', '38 - 50', '51 - 70', '71 - 100', '101 - 180', '>=181');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['sz_teljesitmeny'];
}

foreach ($power as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###teljesitmeny-sz-options###', $options, $output);