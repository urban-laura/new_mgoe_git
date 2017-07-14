<?php
$barrel = array('<=1400', '1401 - 2000', '>=2001');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['sz_barrel'];
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

$output = str_replace('###barrel-sz-options###', $options, $output);
