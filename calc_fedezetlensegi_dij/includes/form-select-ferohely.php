<?php
$ferohely = array('10 - 19', '20 - 42', '43 - 79', '>=80');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['ferohely'];
}

foreach ($ferohely as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###ferohely-options###', $options, $output);