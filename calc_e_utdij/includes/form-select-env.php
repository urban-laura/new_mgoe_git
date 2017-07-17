<?php
$env = array('A (EURO3 vagy jobb)','B (EURO2)', 'C (EURO1)');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['env'];
}

foreach ($env as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###env-options###', $options, $output);