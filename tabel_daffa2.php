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
		<th>PART NUMBER</th>
		<th>MODEL</th>
		<th>TANGGAL DAN WAKTU</th>
		
    </tr>
  </thead>
  
  <?php
		$baris=1;
		$view = mysqli_query($con, "SELECT*FROM unit_finish_rac order by tgl_finish desc limit 15");
		while ($row = mysqli_fetch_array($view)) 
		{
	?>
	
  <tbody>
    <tr>
	

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
		$baris++;	
		}
	?>	
	

  </tbody>
</table>
</center>
</body>				
</form>