<?php
date_default_timezone_set("Europe/Budapest");

$output = file_get_contents('templates/form-table.tpl.php');
$debug = array();

include('includes/types.php');

include('includes/form-select-type.php');
//Személygépjármű
include('includes/form-select-year-sz.php');
include('includes/form-teljesitmeny-sz.php');
include('includes/form-select-barrel-sz.php');
//Motorkerékpár
include('includes/form-select-year-m.php');
include('includes/form-teljesitmeny-m.php');
include('includes/form-select-barrel-m.php');
//Quad
include('includes/form-select-year-q.php');
include('includes/form-teljesitmeny-q.php');
//Kisteherautó (3,5t össztömegig)
include('includes/form-select-year-k.php');
include('includes/form-teljesitmeny-k.php');
//Tehergépkocsi
include('includes/form-select-year-t.php');
include('includes/form-teljesitmeny-t.php');
include('includes/form-select-tomeg.php');
//Autóbusz
include('includes/form-select-year-a.php');
include('includes/form-teljesitmeny-a.php');
include('includes/form-select-szem-szam.php');
//Pótkocsi
include('includes/form-select-tomeg-p.php');
include('includes/form-select-kategoria.php');

include('includes/calc.php');

include('includes/checked.php');

include('includes/sum-visibility.php');

include('includes/sum.php');

include('includes/error-visibility.php');

include('includes/error.php');

print $output;

include('debug.php');
