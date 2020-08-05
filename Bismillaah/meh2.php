<?php
session_start();
?>
<html>
	<head>
		<style>
			body {
				background-color : #fff;
				margin : 0px;
				height : 100%;
				weigth : 100%;
			}
		</style>
	</head>
	<body>
		<?php
			print_r($_SESSION['NamaUnit']);
		?>
	</body>
</html>