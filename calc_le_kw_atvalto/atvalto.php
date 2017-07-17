<?php
$output = file_get_contents('templates/form-table.tpl.php');
$debug = array();

include('includes/form-number.php');
include('includes/form-select-or-mibol.php');
include('includes/form-select-or-mibe.php');

include('includes/calc.php');

include('includes/sum.php');

include('includes/error.php');

print $output;