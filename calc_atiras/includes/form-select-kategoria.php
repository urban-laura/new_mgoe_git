<?php
$kategoria = array('Könnyű pótkocsi (össztömeg 750 kg-ig)', 'Nehéz pótkocsi (össztömeg 750 kg felett)', 'Különleges pótkocsi (felépítménnyel ellátott)');

$options = '';

if(isset($_POST['submitted']))
{
	$selected = $_POST['kategoria'];
}

foreach ($kategoria as $class)
{
	$selected_option = '';
	
	if(isset($selected) && $selected == $class)
	{
		$selected_option = 'SELECTED';
	}
	$options .= '<option ' . $selected_option . '>' . $class . '</option>';
}

$output = str_replace('###kategoria-options###', $options, $output);