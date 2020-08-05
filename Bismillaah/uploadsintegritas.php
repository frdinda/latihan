<?php
session_start();
require 'db.php';
require 'etupoksi.php';
require 'elevelspip.php';
    if(isset($_FILES['1.1'])){
			$nama1 = $_FILES['1.1']['name'];
			$ukuran1 = $_FILES['1.1']['size'];
			$tipe1 = $_FILES['1.1']['type'];
			$tmp1 = $_FILES['1.1']['tmp_name'];
			$berkas1 = 'uploads/'.$_FILES['1.1']['name'];
			$unggah1 = move_uploaded_file($tmp,$berkas1);
			if($unggah){
				$add1 = ("INSERT INTO dokumen (Kode_Unit, Kode_Unsur, Kode_Tipe_Dokumen, Berkas) VALUES ('$kodeunit','U1','1.1', '$nama1')");
				$resultadd1 = $conn->query($add1);
				if($resultadd1 === TRUE){
					echo "<script>alert('File Berhasil Diinput!');</script>";
				} else{
					echo "<script>alert('File Tidak Berhasil Diinput!!!!');</script>";
				}
			}
		}else{
			echo "<script>alert('File Tidak Berhasil Diinput!');</script>";
		}

		
	?>