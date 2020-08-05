<?php
session_start();
require 'db.php';

	$kodeunit = $_SESSION["KodeUnit"];
	$U1 = filter_input(INPUT_POST, 'U1', FILTER_VALIDATE_INT);
	$U2 = filter_input(INPUT_POST, 'U2', FILTER_VALIDATE_INT);
	$U3 = filter_input(INPUT_POST, 'U3', FILTER_VALIDATE_INT);
	$U4 = filter_input(INPUT_POST, 'U4', FILTER_VALIDATE_INT);
	$U5 = filter_input(INPUT_POST, 'U5', FILTER_VALIDATE_INT);
	
	if((!strlen(trim($U1))) || (!strlen(trim($U2))) || (!strlen(trim($U3))) || (!strlen(trim($U4))) || (!strlen(trim($U5)))){
		echo "<script>alert('Data Belum Lengkap!'); window.location.replace('inputbobotnilai.php');</script>";
	}
	else{
		$total = $U1 + $U2 + $U3 + $U4 + $U5;
		if(($total != 100)){
			echo "<script>alert('Bobot Nilai Harus Total 100!'); window.location.replace('inputbobotnilai.php');</script>";
		}
		else{
			if($_SESSION['bobotnilai'] === NULL){
				for($a=0; $a<5; $a++){
					$kodeunsur = "U" . ($a+1);
					if($a===0){
						$ibn = $U1;
					}else if($a===1){
						$ibn = $U2;
					}else if($a===2){
						$ibn = $U3;
					}else if($a===3){
						$ibn = $U4;
					}else if($a===4){
						$ibn = $U5;
					}
					$sqlinsert = "INSERT INTO bobot_nilai (Kode_Unsur, Kode_Unit, Bobot_Nilai) VALUES ('$kodeunsur','$kodeunit','$ibn')";
					$result = $conn->query($sqlinsert);
				}
				if($result === TRUE){
					$sql = "SELECT * FROM Bobot_Nilai WHERE Kode_Unit = '$kodeunit'";
					$resultselect = $conn->query($sql);
					$a = 0;
					while($bobotnilai = $resultselect -> fetch_assoc()){
						$numpang[$a] = $bobotnilai['Bobot_Nilai'];
						$a++;
					}
					$_SESSION['bobotnilai'] = $numpang;
					echo "<script>alert('Data Berhasil Diinput!'); window.location.replace('inputbobotnilai.php');</script>";
				}else{
					echo "<script>alert('COBA LAGI!'); window.location.replace('inputbobotnilai.php');</script>";
				}
			}
			else{
				for($a=0; $a<5; $a++){
					$kodeunsur = "U" . ($a+1);
					if($a === 0){
						$ibn = $U1;
					}else if($a === 1){
						$ibn = $U2;
					}else if($a === 2){
						$ibn = $U3;
					}else if($a === 3){
						$ibn = $U4;
					}else if($a === 4){
						$ibn = $U5;
					}
					$sqlupdate   = "UPDATE bobot_nilai SET Bobot_Nilai = '$ibn' WHERE Kode_Unit = '$kodeunit' AND Kode_Unsur = '$kodeunsur'";
					$result = $conn->query($sqlupdate);
				}
				if($result === TRUE){
					$sql = "SELECT * FROM Bobot_Nilai WHERE Kode_Unit = '$kodeunit'";
					$resultselect = $conn->query($sql);
					$a = 0;
					while($bobotnilai = $resultselect -> fetch_assoc()){
						$numpang[$a] = $bobotnilai['Bobot_Nilai'];
						$a++;
					}
					$_SESSION['bobotnilai'] = $numpang;
					echo "<script>alert('Data Berhasil Diinput!'); window.location.replace('inputbobotnilai.php');</script>";
				}else{
					echo "<script>alert('COBA LAGI!'); window.location.replace('inputbobotnilai.php');</script>";
				}
			}
		}
	}
	
?>