<?php
$type = array('Benzin', 'Dízel', 'Hibrid', 'Elektromos');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['type'];
}

foreach ($type as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###type-options###', $options, $output);