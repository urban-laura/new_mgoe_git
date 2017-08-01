<?php
$output = file_get_contents('templates/form-table.tpl.php');
$debug = array();

include('includes/form-select-env.php');
include('includes/form-select-power.php');

include('includes/calc.php');

include('includes/error-visibility.php');

include('includes/error.php');

include('includes/sum-visibility.php');

include('includes/sum.php');

print $output;