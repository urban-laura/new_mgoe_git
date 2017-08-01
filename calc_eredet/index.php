<?php
$output = file_get_contents('templates/form-table.tpl.php');

include('includes/form-select-hatosagi.php');

include('includes/calc.php');

print $output;