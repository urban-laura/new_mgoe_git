<?php
$szem_szam = array('<=20', '>20');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['szem_szam'];
}

foreach ($szem_szam as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###szem-szam-options###', $options, $output);