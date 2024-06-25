<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php foreach ($tasks as $task) : ?>
		<h1>
			<?php if ($task->isComplete()) :?>
				<strike><?= $task->getDescription(); ?></strike>
			<?php else: ?>
				<?= $task->getDescription(); ?>
			<?php endif; ?>
		</h1>
	<?php endforeach; ?>
</body>
</html>