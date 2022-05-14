<?php 
		// $con	= mysqli_connect("localhost", "root", "") or die (mysqli_error());
		$con	= mysqli_connect("140.238.194.240", "root", "") or die (mysqli_error());
		$db		= mysqli_select_db ($con , "data_acqusition") or die (mysqli_error());
