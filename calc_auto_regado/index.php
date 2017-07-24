<?php

date_default_timezone_set("Europe/Budapest");

$output = file_get_contents('templates/form-table.tpl.php');
$debug = array();

include('includes/fuel.php');
//benzin
include('includes/form-select-year-b.php');
include('includes/form-select-month-b.php');
include('includes/form-select-env-b.php');
include('includes/form-select-barrel-b.php');

//dizel
include('includes/form-select-year-d.php');
include('includes/form-select-month-d.php');
include('includes/form-select-env-d.php');
include('includes/form-select-barrel-d.php');

//hibrid
include('includes/form-select-year-h.php');
include('includes/form-select-month-h.php');

include('includes/sum-visibility.php');

include('includes/calc.php');

include('includes/sum.php');

include('includes/error.php');

print $output;

include('debug.php');
