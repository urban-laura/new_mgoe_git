<?php
$output = file_get_contents('templates/form-table.tpl.php');
$debug = array();

include('includes/form-select-category.php');
include('includes/form-select-env.php');
include('includes/form-fout.php');
include('includes/form-gyorsforgalmi.php');

include('includes/calc.php');

include('includes/sum-visibility.php');

include('includes/sum.php');

include('includes/error.php');

print $output;