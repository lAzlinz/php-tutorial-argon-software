<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
		header {
			background-color: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1>
			<?php

				$name = $_GET['name'];

				$greeting = 'Hello';

				echo "$greeting, $name"; 


			?>    
		</h1>
		<h1>
			<!-- To protect it, use htmlspecialchars. -->
			<?php echo 'Hello, ' . htmlspecialchars($_GET['name']); ?>
			<!-- The same as <?= 'Hello, ' . htmlspecialchars($_GET['name']); ?> -->
		</h1>
	</header>
</body>
</html>