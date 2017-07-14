<?php
$env_classes = array('0-4 (EURO1, EURO2)', '6-10 (EURO3, EURO4)', '5, 14-15 (EURO5, EURO6, Hibrid)');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['env'];
}

foreach ($env_classes as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###env-options###', $options, $output);