<?php 

include "konek.php";

?>

<head>
	<link rel="stylesheet"  href="css/fix.css">

</head>

	<form action="" method="post"> 
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
		$view = mysqli_query($con, "SELECT*FROM alarm_rac order by tanggal_awal desc limit 15");     
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
				<?php if($row["station"] == 1)
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
</center>
</body>
				
</form>