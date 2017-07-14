<?php
$barrel_d_classes = array('<=1300', '1301 - 1500', '1501 - 1700', '1701 - 2000', '2001 - 2500', '2501 - 3000', '>=3001');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['barrel_d'];
}

foreach ($barrel_d_classes as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###barrel-d-options###', $options, $output);
