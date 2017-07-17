<?php
$category = array('J2 (kéttengelyes)','J3 (háromtengelyes)', 'J4 (négy- vagy több tengelyes)');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['category'];
}

foreach ($category as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###category-options###', $options, $output);