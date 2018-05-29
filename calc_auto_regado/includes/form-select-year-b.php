<?php
$options = '';

if (isset($_POST['c_year_b'])) {

	$selected = $_POST['c_year_b'];
}

for($e=date("Y");$e>=1990;$e--)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $e)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $e . '</option>';
}

$output = str_replace('###year-b-options###', $options, $output);
