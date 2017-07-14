<?php
$tomeg = array('3,5t - 7,5t', '>7,5t');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['tomeg'];
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

$output = str_replace('###tomeg-options###', $options, $output);