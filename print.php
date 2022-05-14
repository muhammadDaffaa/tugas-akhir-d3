<?php

include 'konek.php';

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// sheet peratama
$sheet->setTitle('Sheet 1');
$sheet->setCellValue('A1', 'Tanggal Awal');
$sheet->setCellValue('B1', 'Tanggal Akhir');
$sheet->setCellValue('C1', 'Station');
$sheet->setCellValue('D1', 'Alarm');
$sheet->setCellValue('E1', 'Line Stop');



		$st = $_GET['st'];
		$tglawal = $_GET['tglawal'];
		$tglakhir = $_GET['tglakhir'];
		
		//echo "SELECT*FROM alarm_rac where station = " .$st. " and tanggal_awal between ' ".$tglawal."' and '".$tglakhir."'";

// membaca data dari mysql
$employee = mysqli_query($con,"SELECT*FROM alarm_rac where station = " .$st. " and tanggal_awal between ' ".$tglawal."' and '".$tglakhir."' ");
$row = 2;
while($record = mysqli_fetch_array($employee))
{
    $sheet->setCellValue('A'.$row, $record['tanggal_awal']);
    $sheet->setCellValue('B'.$row, $record['tanggal_akhir']);
	if ($record['station']==1) {
		$sheet->setCellValue('C'.$row, "R100");}
	else if ($record['station']==2) {
		$sheet->setCellValue('C'.$row, "R110");} 
	else if ($record['station']==3) {
		$sheet->setCellValue('C'.$row, "R130");}
	else if($record['station']==4) {
		$sheet->setCellValue('C'.$row, "R140");}
	else if($record['station']==5) {
		$sheet->setCellValue('C'.$row, "R150");}
	else if($record['station']==6) {
		$sheet->setCellValue('C'.$row, "R160");}
	else if($record['station']==7) {
		$sheet->setCellValue('C'.$row, "R170");}
	else if($record['station']==8) {
		$sheet->setCellValue('C'.$row, "R190");}
    $sheet->setCellValue('D'.$row, $record['alarm']);
	$sheet->setCellValue('E'.$row, $record['total_alarm']);
    $row++;
}
$writer = new Xlsx($spreadsheet);

// We'll be outputting an excel file
header('Content-type: application/vnd.ms-excel');

// It will be called file.xlsx
header('Content-Disposition: attachment; filename="'.$tglawal. 'and' .$tglakhir.'".xlsx"');

$writer->save('php://output');
