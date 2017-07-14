<?php
$output = file_get_contents('templates/form-table.tpl.php');
$debug = array();

include('includes/form-sebesseghatar.php');
include('includes/form-on-sebessege.php');

include('includes/sum-visibility.php');

include('includes/calc.php');

include('includes/sum.php');

include('includes/error.php');

print $output;
