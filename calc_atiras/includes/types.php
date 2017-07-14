<?php
if (!isset($_POST['submitted']))
{
	$types = 'szemelygepjarmu';
}

else 
{
	$types = $_POST['types'];
}

$output = str_replace('###types###', $types, $output);

//php csere
$options = array('szemelygepjarmu', 'motorkerekpar', 'quad', 'kisteherauto', 'tehergepkocsi', 'autobusz', 'potkocsi');

$output = str_replace('###visibility-'.$types.'-class###', 'visible', $output);

foreach($options as $option)
{
	if($types != $option)
	{
		$output = str_replace('###visibility-'.$option.'-class###', 'invisible', $output);
	}
}