<?php
$barrel_b_classes = array('<=1100', '1101 - 1400', '1401 - 1600', '1601 - 1800', '1801 - 2000', '2001 - 2500', '>=2501');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['barrel_b'];
}

foreach ($barrel_b_classes as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###barrel-b-options###', $options, $output);
