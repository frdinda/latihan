<?php

	$kodeunit = $_POST['KodeUnit'];
	$password = $_POST['Password'];
	$sql   = "SELECT * FROM unit_organisasi WHERE Kode_Unit = '$kodeunit'";
	$result = $conn->query($sql);
	
	if((!strlen(trim($kodeunit))) || (!strlen(trim($password)))){
		echo "<script>alert('Data Belum Lengkap!'); window.location.replace('login.php');</script>";
	}else{
		if ($result -> num_rows == 0){
			echo "<script>alert('Kode Unit Salah!'); window.location.replace('login.php');</script>";
		}
		else {
			while($row = $result->fetch_assoc()) {
				if ($password == $row['Password']){
					session_start();
					if(($row['Nama_Unit'] === NULL) || ($row['Pimpinan_Unit'] === NULL) || ($row['Alamat'] === NULL) || ($row['Kuasa_Anggaran'] === NULL) || ($row['Pembuat_Komitment'] === NULL) || ($row['Penanggungjawab'] === NULL)){
						$_SESSION["KodeUnit"] = $row['Kode_Unit'];
						$_SESSION["NamaUnit"] = $row['Nama_Unit'];
						header('Location:inputdataunit.php');
					}
					else{
						$_SESSION["KodeUnit"] = $row['Kode_Unit'];
						$_SESSION["NamaUnit"] = $row['Nama_Unit'];
						header("Location:menu.php");
					}
				}
				else{
					echo "<script>alert('Password Salah!'); window.location.replace('login.php');</script>";
				}
			}
		}
	}
		
?>