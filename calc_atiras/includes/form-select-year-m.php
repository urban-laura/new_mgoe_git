<?php
$options = '';
$selected = $_POST['m_year'];

for($e=date("Y");$e>=1990;$e--)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $e)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $e . '</option>';
}

$output = str_replace('###year-m-options###', $options, $output);