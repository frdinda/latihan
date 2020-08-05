<?php

	$kodeunit = $_POST['KodeUnit'];
	$result   = "SELECT * FROM unit_organisasi WHERE Kode_Unit = " .$kodeunit;
	
	if ($result -> num_rows == 0){
		echo "<script>alert('Kode Unit Salah')</script>";
	}
	else {
		$unit = $result->fetch_assoc();
		
		if (password_verify($_POST['Password'], $unit['Password'])){
			$_SESSION['KodeUnit'] = $unit['Kode_Unit'];
			$_SESSION['NamaUnit'] = $unit['Nama_Unit'];
			$_SESSION['TugasPokok'] = $unit['Tugas_Pokok'];
			$_SESSION['Fungsi'] = $unit['Fungsi'];
			
			$_SESSION['logged_in'] = true;
		}
		else{
			echo "<script>alert('Password Salah')</script>";
		}
	}