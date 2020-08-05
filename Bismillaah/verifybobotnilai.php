<?php
session_start();
require 'db.php';

	if(($_SESSION["TugasPokok"] === NULL) || ($_SESSION["Fungsi"] === NULL)){
		$_SESSION['message'] = 'Unit Anda Belum Menginput TUPOKSI';
		header('Location:error.php');
	}
	else{
		$kodeunit = $_SESSION["KodeUnit"];
		$sql = "SELECT * FROM Bobot_Nilai WHERE Kode_Unit = '$kodeunit'";
		$result = $conn->query($sql);
		
		if ($result -> num_rows == 0){
			$_SESSION['bobotnilai'] = NULL;
			header('Location:inputbobotnilai.php');
		}
		else{
			$sql = "SELECT * FROM Bobot_Nilai WHERE Kode_Unit = '$kodeunit'";
			$result = $conn->query($sql);
			$a = 0;
			while($bobotnilai = $result -> fetch_assoc()){
				$numpang[$a] = $bobotnilai['Bobot_Nilai'];
				$a++;
			}
			$_SESSION['bobotnilai'] = $numpang;
			header('Location:inputbobotnilai.php');
		}
	}

?>