<?php

require 'db.php';
session_start();
?>

<html>
	<head>
		<style>
			<?php include 'loginpj.css'; ?>
		</style>
		<title>Sistem Pengendalian Intern Pemerintah</title>
		<link rel = "stylesheet" type = "text/css" href = "loginpj.css" media = "screen">
	</head>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if (isset($_POST['login'])){
				require 'meh.php';
			}
		}
	?>	
	<body>
		<h1 align = "center">Sistem Pengendalian Intern Pemerintah</h1>
		<div id = "penanggung_jawab">
			<form id = "login" method = "post" action = "">
					<p>
						<input type = "text" id = "KodeUnit" name = "KodeUnit" placeholder = "Kode Unit Organisasi"/>
					</p>
					<p>
						<input type = "password" id = "Password" name = "Password" placeholder = "Password"/>
					</p>
					<center>
						<button class="button" name="login"/>Log In</button>
					</center>
			</form>
		</div>
	</body>
</html>