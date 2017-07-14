<?php
$barrel = array('<=500','>500');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['m_barrel'];
}

foreach ($barrel as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###barrel-m-options###', $options, $output);