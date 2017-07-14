<?php
$power_classes = array('<=50', '51 - 90', '91 - 120', '>=121');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['power'];
}

foreach ($power_classes as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###power-options###', $options, $output);