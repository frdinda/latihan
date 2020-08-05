<?php
require 'db.php';

	$kodeunit = $_SESSION["KodeUnit"];
	$sql   = "SELECT * FROM unit_organisasi WHERE Kode_Unit = '$kodeunit'";
	$result = $conn->query($sql);
	
	while($row = $result->fetch_assoc()) {
		$_SESSION["TugasPokok"] = $row['Tugas_Pokok'];
		$_SESSION["Fungsi"] = $row['Fungsi'];
		$_SESSION["NamaUnit"] = $row['Nama_Unit'];
		$_SESSION["KodeUnit"] = $row['Kode_Unit'];
		$_SESSION["PimpinanUnit"] = $row['Pimpinan_Unit'];
		$_SESSION["NoTelp"] = $row['No_Telp'];
		$_SESSION["Email"] = $row['Email'];
		$_SESSION["Alamat"] = $row['Alamat'];
		$_SESSION["PembuatKomitmen"] = $row['Pembuat_Komitment'];
		$_SESSION["Penanggungjawab"] = $row['Penanggungjawab'];
		$_SESSION["KuasaAnggaran"] = $row['Kuasa_Anggaran'];
		$_SESSION["Eselon1"] = $row['Nama_Unit_Eselon_1'];
		$_SESSION["Satker"] = $row['Nama_Satuan_Kerja'];
		$_SESSION["Anggaran"] = $row['Anggaran'];
		$_SESSION["TahunAnggaran"] = $row['Tahun_Anggaran'];
		
	}
	