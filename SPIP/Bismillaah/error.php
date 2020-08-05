<?php
session_start();
?>

<html>
	<head>
		<style>
			body{
				margin :0;
				background-color : #000;
			}

			h1{
				font-family : Century Gothic;
				font-size : 500%;
				text-align : center;
				color : #fff;
			}
		</style>
	</head>
	<body>
		<h1>
			<?php
				print_r($_SESSION['message']);
			?>
		</h1>
	</body>
</html>