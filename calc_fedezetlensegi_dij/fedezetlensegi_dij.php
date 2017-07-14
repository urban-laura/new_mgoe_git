<?php
$output = file_get_contents('templates/form-table.tpl.php');
$debug = array();

include('includes/types.php');

include('includes/form-select-type.php');
//Személygépjármű
include('includes/form-select-teljesitmeny-sz.php');
include('includes/form-napok-sz.php');
//Motorkerékpár
include('includes/form-select-teljesitmeny-m.php');
include('includes/form-napok-m.php');
//Quad
include('includes/form-napok-q.php');
//Autóbusz
include('includes/form-select-ferohely.php');
include('includes/form-napok-a.php');
//Trolibusz
include('includes/form-napok-tr.php');
//Tehergépkocsi
include('includes/form-select-ossztomeg-t.php');
include('includes/form-napok-t.php');
//Vontató
include('includes/form-napok-v.php');
//Mezőgazdasági vontató
include('includes/form-napok-mv.php');
//Pótkocsi
include('includes/form-select-ossztomeg-p.php');
include('includes/form-napok-p.php');
//Lassú jármű
include('includes/form-napok-l.php');
//Munkagép
include('includes/form-napok-mu.php');

include('includes/calc.php');

include('includes/sum-visibility.php');

include('includes/sum.php');

include('includes/error.php');

print $output;