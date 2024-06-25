<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Task for Today!</h1>

	<ul>
		<li>
			<strong>Name: </strong>
			<?= $task['title'];?>
		</li>
		<li>
			<strong>Due Date: </strong>
			<?= $task['due'];?>
		</li>
		<li>
			<strong>Person Responsible: </strong>
			<?= $task['assigned_to'];?>
		</li>
		<li>
			<strong>Status: </strong>
			<!-- <?= $task['completed'] ? 'Done' : 'Not Done';?> -->
			<?php if (! $task['completed']) : ?>
				<?= '&#9745 To Do'; ?>
			<?php else : ?>
				<?= '&#9745 Done'; ?>
			<?php endif; ?>
		</li>
	</ul>
</body>
</html>