<?php
$tomeg = array('1 - 750', '751 - 10000', '>=10001');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['p_ossztomeg'];
}

foreach ($tomeg as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###ossztomeg-p-options###', $options, $output);