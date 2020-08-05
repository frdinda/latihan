<?php
session_start();
require 'db.php';

	$kodeunit = $_SESSION["KodeUnit"];
	$kodekegiatan = $_SESSION["KodeKegiatan"];
	$Unsur_1 = $_SESSION["Unsur_1"];
	$Unsur_2 = $_SESSION["Unsur_2"];
	$Unsur_3 = $_SESSION["Unsur_3"];
	$Unsur_4 = $_SESSION["Unsur_4"];
	$Unsur_5 = $_SESSION["Unsur_5"];
	$kegiatanpokok = $_POST['kegiatanpokok'];
	$definisikegiatan = $_POST['definisikegiatan'];
	$outputkegiatan = $_POST['outputkegiatan'];
	$karakteristikkegiatan = $_POST['karakteristikkegiatan'];
	$lingkupkegiatan = $_POST['lingkupkegiatan'];
	
	
	if ((!strlen(trim($kegiatanpokok))) || (!strlen(trim($definisikegiatan))) || (!strlen(trim($outputkegiatan))) || (!strlen(trim($karakteristikkegiatan))) || (!strlen(trim($lingkupkegiatan)))){
		echo "<script>alert('Data Belum Lengkap!'); window.location.replace('kegiatanpokok.php');</script>";
	}
	else{
		
		if($_SESSION['KegiatanPokok'] === NULL){
			$sqlinsert = "INSERT INTO kegiatan_pokok (Kode_Unit, Kegiatan_Pokok, Definisi_Kegiatan, Output_Kegiatan, Karakteristik_Kegiatan, Lingkup_Kegiatan) VALUES ('$kodeunit', '$kegiatanpokok', '$definisikegiatan', '$outputkegiatan', '$karakteristikkegiatan', '$lingkupkegiatan')";
			$resultinsert = $conn -> query($sqlinsert);
			if($resultinsert === TRUE){
				$sqlselect = "SELECT * FROM kegiatan_pokok WHERE Kode_Unit = '$kodeunit'";
				$resultselect = $conn -> $resultselect($sqlselect);
				while($kegiatanunit = $resultselect -> fetch_assoc()){
					$_SESSION["KegiatanPokok"] = $kegiatanunit['Kegiatan_Pokok'];
					$_SESSION["DefinisiKegiatan"] = $kegiatanunit['Definisi_Kegiatan'];
					$_SESSION["OutputKegiatan"] = $kegiatanunit['Output_Kegiatan'];
					$_SESSION["KarakteristikKegiatan"] = $kegiatanunit['Karakteristik_Kegiatan'];
					$_SESSION["LingkupKegiatan"] = $kegiatanunit['Lingkup_Kegiatan'];
				}
				
				$sqlbobotnilai = "SELECT * FROM bobot_nilai WHERE Kode_Unit = '$kodeunit'";
				$resultbobotnilai = $conn->query($sqlbobotnilai);
				
				if($resultbobotnilai -> num_rows == 0){
				}
				else{
					while($row = $resultbobotnilai->fetch_assoc()) {
						if($row["Kode_Unsur"] == "U1"){
							$U1 = $row["Bobot_Nilai"];
						}else if($row["Kode_Unsur"] == "U2"){
							$U2 = $row["Bobot_Nilai"];
						}else if($row["Kode_Unsur"] == "U3"){
							$U3 = $row["Bobot_Nilai"];
						}else if($row["Kode_Unsur"] == "U4"){
							$U4 = $row["Bobot_Nilai"];
						}else if($row["Kode_Unsur"] == "U5"){
							$U5 = $row["Bobot_Nilai"];
						}
					}
					$B2 = $U2/4;
					$PRawal = ($Unsur_2/100)*$U2;
					$PRakhir = (($PRawal + $B2)/$U2)*100;
					$total = ($Unsur_1 + $PRakhir + $Unsur_3 + $Unsur_4 + $Unsur_5);
					if($Unsur_2 >= 0 && $Unsur_2 < 100){
						$posisi = 2;
					}else if ($Unsur_2 == 100 && $Unsur_3 >= 0 && $Unsur_3 < 100){
						$posisi = 3;
					}else if ($Unsur_2 == 100 && $Unsur_3 == 100 && $Unsur_4 >= 0 && $Unsur_4 < 100){	$posisi = 4;
					}else if ($Unsur_2 == 100 & $Unsur_3 == 100 && $Unsur_4 == 100 && $Unsur_5 >= 0 && $Unsur_5 <= 100){
						$posisi = 5;
					}
					$sqlupdateposisi   = "UPDATE level_spip SET Unsur_2 = '$PRakhir', Posisi = '$posisi' WHERE Kode_Unit = '$kodeunit'";
					$resultupdateposisi = $conn->query($sqlupdateposisi);
					if($resultupdateposisi === TRUE){
						echo "<script>alert('Data Berhasil Diinput!'); window.location.replace('tambahkegiatanpokok.php');</script>";
					} else{
						echo "<script>alert('Data Tidak Berhasil Diinput!'); window.location.replace('kegiatanpokok.php');</script>";
					}
				}
				
			}
		} else {
			$sqlupdate = "UPDATE `kegiatan_pokok` SET `Kegiatan_Pokok`='$kegiatanpokok',`Definisi_Kegiatan`='$definisikegiatan',`Output_Kegiatan`='$outputkegiatan',`Karakteristik_Kegiatan`='$karakteristikkegiatan',`Lingkup_Kegiatan`='$lingkupkegiatan' WHERE Kode_Unit = '$kodeunit'";
			$resultupdate = $conn -> query($sqlupdate);
			if($resultupdate === TRUE){
				$sqlselect = "SELECT * FROM kegiatan_pokok WHERE Kode_Unit = '$kodeunit'";
				$resultselect = $conn -> query($sqlselect);
				while($kegiatanunit = $resultselect -> fetch_assoc()){
					$_SESSION["KegiatanPokok"] = $kegiatanunit['Kegiatan_Pokok'];
					$_SESSION["DefinisiKegiatan"] = $kegiatanunit['Definisi_Kegiatan'];
					$_SESSION["OutputKegiatan"] = $kegiatanunit['Output_Kegiatan'];
					$_SESSION["KarakteristikKegiatan"] = $kegiatanunit['Karakteristik_Kegiatan'];
					$_SESSION["LingkupKegiatan"] = $kegiatanunit['Lingkup_Kegiatan'];
				}
				
				$sqlbobotnilai = "SELECT * FROM bobot_nilai WHERE Kode_Unit = '$kodeunit'";
				$resultbobotnilai = $conn->query($sqlbobotnilai);
				
				if($resultbobotnilai -> num_rows == 0){
				}
				else{
					while($row = $resultbobotnilai->fetch_assoc()) {
						if($row["Kode_Unsur"] == "U1"){
							$U1 = $row["Bobot_Nilai"];
						}else if($row["Kode_Unsur"] == "U2"){
							$U2 = $row["Bobot_Nilai"];
						}else if($row["Kode_Unsur"] == "U3"){
							$U3 = $row["Bobot_Nilai"];
						}else if($row["Kode_Unsur"] == "U4"){
							$U4 = $row["Bobot_Nilai"];
						}else if($row["Kode_Unsur"] == "U5"){
							$U5 = $row["Bobot_Nilai"];
						}
					}
					$B2 = $U2/4;
					$PRawal = ($Unsur_2/100)*$U2;
					$PRakhir = (($PRawal + $B2)/$U2)*100;
					$total = ($Unsur_1 + $PRakhir + $Unsur_3 + $Unsur_4 + $Unsur_5);
					if($Unsur_2 >= 0 && $Unsur_2 < 100){
						$posisi = 2;
					}else if ($Unsur_2 == 100 && $Unsur_3 >= 0 && $Unsur_3 < 100){
						$posisi = 3;
					}else if ($Unsur_2 == 100 && $Unsur_3 == 100 && $Unsur_4 >= 0 && $Unsur_4 < 100){	$posisi = 4;
					}else if ($Unsur_2 == 100 & $Unsur_3 == 100 && $Unsur_4 == 100 && $Unsur_5 >= 0 && $Unsur_5 <= 100){
						$posisi = 5;
					}
					$sqlupdateposisi   = "UPDATE level_spip SET Unsur_2 = '$PRakhir', Posisi = '$posisi' WHERE Kode_Unit = '$kodeunit'";
					$resultupdateposisi = $conn->query($sqlupdate);
					if($resultupdateposisi === TRUE){
						echo "<script>alert('Data Berhasil Diinput!'); window.location.replace('kegiatanpokok.php');</script>";
					} else{
						echo "<script>alert('Data Tidak Berhasil Diinput!'); window.location.replace('kegiatanpokok.php');</script>";
					}
				}
				
			}
		}
	}


?>