<?php 

include "konek.php";

?>

<head>
	<link rel="stylesheet"  href="css/fix.css">

</head>

	<form action="" method="get"> 
<body>
<center>
	
<table class="content-table">
  <thead>
  <button><a href = "unit.php" >Kembali</a></button>
	<button><a href = "print2.php?tglawal=<?php echo $_POST['tanggal_awal'] ?>&tglakhir=<?php echo $_POST['tanggal_akhir'] ?>">Cetak</a></button>
    <tr>
		<th>No</th>
		<th>Part Number</th>
		<th>Model</th>
		<th>Tanggal dan Waktu</th>
		
    </tr>
  </thead>
  
  <?php
		$baris=1;
		
		$tglawal = $_POST['tanggal_awal'];
		$tglakhir = $_POST['tanggal_akhir'];
		
		//echo "Station = ".$st." Tanggal Awal = ".$tglawal." Tanggal Akhir = ".$tglakhir ; 
		
		
		$view = mysqli_query($con, "SELECT*FROM unit_finish_rac where tgl_finish >= ' ".$tglawal."' and tgl_finish <= '".$tglakhir."'");
		while ($row = mysqli_fetch_array($view)) 
		{
	?>
	
  <tbody>
    <tr>
	
			<td> <?= $baris++ ;?> </td>
			<td>
				<?php echo $row['part_number']?>
			</td>
			<td>
				<?php echo $row['model']?>
			</td>
			<td>
				<?php echo $row['tgl_finish']?>
			</td>
		</tr>
		
	<?php	
		}
	?>	
	


  </tbody>
</table>
	
	
</center>
</body>
				
</form>