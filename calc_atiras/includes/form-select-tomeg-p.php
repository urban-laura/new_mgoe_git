<?php
$tomeg = array('<=2,5t', '>2,5t');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['p_tomeg'];
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

$output = str_replace('###tomeg-p-options###', $options, $output);