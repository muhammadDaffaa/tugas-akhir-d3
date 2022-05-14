<?php

include 'konek.php';

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// sheet peratama
$sheet->setTitle('Sheet 1');
$sheet->setCellValue('A1', 'Part Number');
$sheet->setCellValue('B1', 'Model');
$sheet->setCellValue('C1', 'Tanggal dan Waktu');

		
		$tglawal = $_GET['tglawal'];
		$tglakhir = $_GET['tglakhir'];
		
		//echo "SELECT*FROM alarm_rac where station = " .$st. " and tanggal_awal between ' ".$tglawal."' and '".$tglakhir."'";

// membaca data dari mysql
$employee= mysqli_query($con, "SELECT*FROM unit_finish_rac where tgl_finish between ' ".$tglawal."' and  '".$tglakhir."'");
$row = 2;
while($record = mysqli_fetch_assoc($employee))
{
    $sheet->setCellValue('A'.$row, $record['part_number']);
    $sheet->setCellValue('B'.$row, $record['model']);
    $sheet->setCellValue('C'.$row, $record['tgl_finish']);

    $row++;
}
$writer = new Xlsx($spreadsheet);

// We'll be outputting an excel file
header('Content-type: application/vnd.ms-excel');

// It will be called file.xlsx
header('Content-Disposition: attachment; filename="UnitFinish'.$tglawal. 'and' .$tglakhir.'".xlsx"');

$writer->save('php://output');
?>