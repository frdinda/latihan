<?php
session_start();
require 'db.php';

	$kodeunit = $_SESSION["KodeUnit"];
	$namaunit = $_POST['namaunit'];
	$notelp = $_POST['notelp'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$pimpinanunit = $_POST['pimpinanunit'];
	$kuasaanggaran = $_POST['kuasaanggaran'];
	$pembuatkomitmen = $_POST['pembuatkomitmen'];
	$penanggungjawab = $_POST['penanggungjawab'];
	$eselon1 = $_POST['eselon1'];
	$satker = $_POST['satker'];
	$anggaran = $_POST['anggaran'];
	$tahunanggaran = $_POST['tahunanggaran'];
	$sql   = "UPDATE unit_organisasi SET Nama_Unit = '$namaunit', Pimpinan_Unit = '$pimpinanunit', No_Telp = '$notelp', Email = '$email', Alamat = '$alamat', Kuasa_Anggaran = '$kuasaanggaran', Pembuat_Komitment = '$pembuatkomitmen', Penanggungjawab = '$penanggungjawab', Nama_Unit_Eselon_1 = '$eselon1', Nama_Satuan_Kerja = '$satker', Anggaran = '$anggaran', Tahun_Anggaran = '$tahunanggaran' WHERE Kode_Unit = '$kodeunit'";
	$sqlselect = "SELECT * FROM level_spip WHERE Kode_Unit = '$kodeunit'";
	$sqllevel = "INSERT INTO level_spip (Kode_Unit, Unsur_1, Unsur_2, Unsur_3, Unsur_4, Unsur_5, Total_Persentase, Posisi) VALUES ('$kodeunit',0,0,0,0,0,0,1)";
	
	
	if((!strlen(trim($namaunit))) || (!strlen(trim($notelp))) || (!strlen(trim($email))) || (!strlen(trim($alamat))) || (!strlen(trim($pimpinanunit))) || (!strlen(trim($kuasaanggaran))) || (!strlen(trim($pembuatkomitmen))) || (!strlen(trim($penanggungjawab))) || (!strlen(trim($eselon1))) || (!strlen(trim($anggaran))) || (!strlen(trim($tahunanggaran)))){
		echo "<script>alert('Data Belum Lengkap!'); window.location.replace('inputdataunit.php');</script>";
	}
	else{
		$result = $conn->query($sql);
		if($result === TRUE){
			$resultselect = $conn->query($sqlselect);
			if($resultselect -> num_rows == 0){
				$resultlevel = $conn->query($sqllevel);
				if($resultlevel === TRUE){
					$resultselect = $conn->query($sqlselect);
					if($resultselect -> num_rows != 0){
						while($row = $resultselect->fetch_assoc()){
							$_SESSION['Total_Persentase'] = $row['Total_Persentase'];
						}
						echo "<script>alert('Data Berhasil Diinput!!!'); window.location.replace('menu.php');</script>";
					}
				}
			}
			else {
				echo "<script>alert('Data Berhasil Diinput!'); window.location.replace('inputdataunit.php');</script>";
			}
		}
	}
	
?>