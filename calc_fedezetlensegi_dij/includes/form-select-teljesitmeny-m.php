<?php
$power = array('1 - 12', '13 - 35', '36 - 70', '>=71');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['m_teljesitmeny'];
}

foreach ($power as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###teljesitmeny-m-options###', $options, $output);