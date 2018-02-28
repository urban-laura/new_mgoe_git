<?php
$env_d_classes = array('EURO1', 'EURO2', 'EURO3', 'EURO4', 'EURO5', 'EURO6');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['env_d'];
}

foreach ($env_d_classes as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###env-d-options###', $options, $output);
