<?php
$barrel_b_classes = array('<=80', '81 - 125', '126 - 500', '501 - 900', '>=901');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['barrel_m'];
}

foreach ($barrel_b_classes as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###barrel-m-options###', $options, $output);
