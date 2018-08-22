<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$inputFileName = 'example1.xls';
// $helper->log('Loading file ' . pathinfo($inputFileName, PATHINFO_BASENAME) . ' using IOFactory to identify the format');
$spreadsheet = IOFactory::load($inputFileName);
$sheet = $spreadsheet->getSheet(0);
$total_rows = $sheet->getHighestRow();
//It returns the highest number of columns
$total_columns = $sheet->getHighestColumn();
for ($row = 2; $row <= 3; $row++) {
    //Read a single row of data and store it as a array.
    //This line of code selects range of the cells like A1:D1
    $single_row = $sheet->rangeToArray('A' . $row . ':' . $total_columns . $row, null, true, false);
    var_dump($single_row[0]);
}

