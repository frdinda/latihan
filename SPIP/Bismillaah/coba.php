<?php
session_start();
require 'db.php';

	$kodeunit = $_SESSION["KodeUnit"];
	if(isset ($_POST['namaunit'])){
		if((!strlen(trim($_POST['namaunit'])))){
			echo "COBA LAGI";
		}
		else{
			$namaunit = $_POST['namaunit'];
			echo $namaunit;
		}
	}
	else {
		echo "COBA LAGI!!";
	}
	
	
	