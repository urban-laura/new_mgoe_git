<?php
date_default_timezone_set("Europe/Budapest");

$output = file_get_contents('templates/form-table.tpl.php');
$debug = array();


include('includes/form-select-year.php');
include('includes/form-select-month.php');
include('includes/form-select-barrel.php');

include('includes/calc.php');

include('includes/sum-visibility.php');

include('includes/sum.php');

include('includes/error-visibility.php');

include('includes/error.php');

print $output;

include('debug.php');
