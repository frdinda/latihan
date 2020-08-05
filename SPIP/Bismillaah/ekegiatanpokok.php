<?php
require 'db.php';
require 'etupoksi.php';

	$kodeunit = $_SESSION["KodeUnit"];
	$sql   = "SELECT * FROM unit_organisasi WHERE Kode_Unit = '$kodeunit'";
	$result = $conn->query($sql);
	
	while($row = $result->fetch_assoc()) {
		$_SESSION["TugasPokok"] = $row['Tugas_Pokok'];
		$_SESSION["Fungsi"] = $row['Fungsi'];
		$_SESSION["NamaUnit"] = $row['Nama_Unit'];
		$_SESSION["KodeUnit"] = $row['Kode_Unit'];
		$_SESSION["PimpinanUnit"] = $row['Pimpinan_Unit'];
		$_SESSION["Alamat"] = $row['Alamat'];
		$_SESSION["PembuatKomitmen"] = $row['Pembuat_Komitment'];
		$_SESSION["Penanggungjawab"] = $row['Penanggungjawab'];
		$_SESSION["KuasaAnggaran"] = $row['Kuasa_Anggaran'];
		$_SESSION["Eselon1"] = $row['Nama_Unit_Eselon_1'];
		$_SESSION["Satker"] = $row['Nama_Satuan_Kerja'];
		
	}
	
	$sqlkegiatan   = "SELECT * FROM kegiatan_pokok WHERE Kode_Unit = '$kodeunit'";
	$resultkegiatan = $conn->query($sqlkegiatan);
	if ($resultkegiatan -> num_rows == 0){
		$_SESSION["KodeKegiatan"] = NULL;
		$_SESSION["KegiatanPokok"] = NULL;
		$_SESSION["DefinisiKegiatan"] = NULL;
		$_SESSION["OutputKegiatan"] = NULL;
		$_SESSION["KarakteristikKegiatan"] = NULL;
		$_SESSION["LingkupKegiatan"] = NULL;
	}
	else {
		while($rowkegiatan = $resultkegiatan->fetch_assoc()) {
		$_SESSION["KodeKegiatan"] = $rowkegiatan['Kode_Kegiatan'];
		$_SESSION["KegiatanPokok"] = $rowkegiatan['Kegiatan_Pokok'];
		$_SESSION["DefinisiKegiatan"] = $rowkegiatan['Definisi_Kegiatan'];
		$_SESSION["OutputKegiatan"] = $rowkegiatan['Output_Kegiatan'];
		$_SESSION["KarakteristikKegiatan"] = $rowkegiatan['Karakteristik_Kegiatan'];
		$_SESSION["LingkupKegiatan"] = $rowkegiatan['Lingkup_Kegiatan'];
		
	
	}
	}
	
	
	