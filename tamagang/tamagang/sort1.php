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
    <tr>
		<th>TANGGAL DAN WAKTU AWAL</th>
		<th>TANGGAL DAN WAKTU AKHIR</th>
		<th>STATION</th>
		<th>ALARM</th>
		<th>LINE STOP</th>
    </tr>
  </thead>
  
  <?php
		$baris=1;
		$st = $_POST['st'];
		$tglawal = $_POST['tanggal_awal'];
		$tglakhir = $_POST['tanggal_akhir'];
		
		echo "Station = ".$st." Tanggal Awal = ".$tglawal." Tanggal Akhir = ".$tglakhir ; 
		
		
		$view = mysqli_query($con, "SELECT*FROM alarm_rac where station = " .$st. " and tanggal_awal between ' ".$tglawal."' and '".$tglakhir."'");
		while ($row = mysqli_fetch_array($view)) 
		{
	?>
	
  <tbody>
    <tr>
	

			<td>
				<?php echo $row['tanggal_awal']?>
			</td>
			<td>
				<?php echo $row['tanggal_akhir']?>
			</td>
			<td>
				<?php 
				 if($row["station"] == 1)
				{echo "R100";}
				else if($row["station"] == 2)
				{echo "R110";}
				else if($row["station"] == 3)
				{echo "R130";}
				else if($row["station"] == 4)
				{echo "R140";}
				else if($row["station"] == 5)
				{echo "R150";}
				else if($row["station"] == 6)
				{echo "R160";}
				else if($row["station"] == 7)
				{echo "R170";}
				else if($row["station"] == 8)
				{echo "R190";}
				?>
			</td>
			<td>
				<?php echo $row['alarm']?>
			</td>
			<td>
				<?php echo $row['total_alarm']?>
			</td>
		</tr>
		
	<?php
		$baris++;	
		}
	?>	
	


  </tbody>
</table>
	<button><a href = "daffa.php" >Kembali</a></button>
	<button><a href = "print.php?st=<?php echo $_POST['st'] ?>&tglawal=<?php echo $_POST['tanggal_awal'] ?>&tglakhir=<?php echo $_POST['tanggal_akhir'] ?>">Cetak</a></button>
	
</center>
</body>
				
</form>