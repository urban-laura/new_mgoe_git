<?php
$or = array('kW', 'LE');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['sz_or'];
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

$output = str_replace('###or-sz-options###', $options, $output);
