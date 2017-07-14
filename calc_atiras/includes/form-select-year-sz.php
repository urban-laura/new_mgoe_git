<?php
$options = '';
$selected = $_POST['sz_year'];

for($e=date("Y");$e>=1990;$e--)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $e)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $e . '</option>';
}

$output = str_replace('###year-sz-options###', $options, $output);
