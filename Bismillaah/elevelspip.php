<?php
require 'db.php';

	$kodeunit = $_SESSION["KodeUnit"];
	$sql   = "SELECT * FROM level_spip WHERE Kode_Unit = '$kodeunit'";
	$result = $conn->query($sql);
	
	if($result -> num_rows == 0){
		$_SESSION["Posisi"] = "MEH";
	}
	else{
		while($row = $result->fetch_assoc()) {
			$_SESSION["Unsur_1"] = $row['Unsur_1'];
			$_SESSION["Unsur_2"] = $row['Unsur_2'];
			$_SESSION["Unsur_3"] = $row['Unsur_3'];
			$_SESSION["Unsur_4"] = $row['Unsur_4'];
			$_SESSION["Unsur_5"] = $row['Unsur_5'];
			$_SESSION["Total_Persentase"] = $row['Total_Persentase'];
			$_SESSION["Posisi"] = $row['Posisi'];
		}
	}
	