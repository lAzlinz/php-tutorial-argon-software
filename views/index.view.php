<?php require('partials/head.php'); ?>

<h1>Submit Your Name!</h1>
<form method="POST" action="/names">
	<input name="name" type="text">
	<button type="submit">submit</button>
</form>

<ul>
	<?php foreach ($names as $name): ?>
		<li><?= $name->name; ?></li>
	<?php endforeach; ?>
</ul>

<?php require('partials/footer.php'); ?>