<?php 

include "konek.php";
?>

<head>
	<link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css"/>
	<script type="text/javascript" src="jquery_min.js"></script>
</head>

	 

<form action="sort1.php" method="post">
<center>
	<h1>ALARM PROCCESS </H1>
	<marquee direction="left" scrollamount="4" align="center"  style="font-family: impact; font-size:24px; color:#cc0000;" >PT. INTI GANDA PERDANA</marquee>
	
			<table>
			<div class = "tanggalwaktu">
			<tr>
				<td>Tanggal Awal</td> 
				<td>: </td>
				<td><input type="text" id="datetime1" name="tanggal_awal" required></td>
				
				<td>Tanggal Akhir</td>
				<td>: </td>
				<td><input type="text" id="datetime2" name="tanggal_akhir" required></td>
			</tr>
			</table>
			</div>
			

	
	<input  type = "submit"	name = "pb1"	value = "sort">
	
	 <select name="st" required>  
		<option value="" hidden="">Silahkan Pilih</option>
		<option value="*" hidden="">All Station</option> 		
		<option value="1">R100</option>  
		<option value="2">R110</option>  
		<option value="3">R130</option>  
		<option value="4">R140</option> 
		<option value="5">R150</option>  
		<option value="6">R160</option>  
		<option value="7">R170</option>  
		<option value="8">R190</option>
	</select>

  </tbody>
</table>
</center>
			<script>
				
					$(document).ready(function() {
					setInterval(function() {
					var randomnumber=Math.floor(Math.random()*10)
					$('#divTable').load('tabel_daffa.php');
					}, 10);
					});
				</script>
			
				
				<div id="divTable" >
					<?php include'tabel_daffa.php';?>
				</div>

</form>

<footer>	

	<!--<script src="datetimepicker/jquery.js"></script>-->
	<script src="datetimepicker/jquery.datetimepicker.full.min.js"></script>
	<script type="text/javascript">
	
		now = new Date();
		if (now.getTimezoneOffset() == 0) (a=now.getTime() + ( 7 *60*60*1000))
		else (a=now.getTime());
		now.setTime(a);
		var tahun= now.getFullYear ()
		var hari= now.getDay ()
		var bulan= now.getMonth ()
		var tanggal= now.getDate ()
		var hariarray=new Array("Minggu,","Senin,",
		"Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,")
		var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","/ 12 /")
		document.write(hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun)
	</script>

	<script type="text/javascript"> 
	
		function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
		var waktu = new Date();            //membuat object date berdasarkan waktu saat 
		var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
		var sm = waktu.getMinutes() + "";  //memunculkan nilai detik    
		var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
		document.getElementById("clock").innerHTML = "|" +(sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
		}
	</script>

	<script type="text/javascript">
	
		$(document).ready(function() {
			$("#datetime1").datetimepicker({
				format: 'Y-m-d H:i:s'
			});
			$("#datetime2").datetimepicker({
				format: 'Y-m-d H:i:s'
			});
		});
	</script>

<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">        
<span id="clock"></span>

</footer>