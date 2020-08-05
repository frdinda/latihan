<?php
session_start();

	if(($_SESSION["TugasPokok"] === NULL) || ($_SESSION["Fungsi"] === NULL)){
		header('Location:inputupoksi.php');
	}
	else{
		header('Location:tupoksi.php');
	}

?>