<?php require('partials/head.php'); ?>

<h1>Submit Your Name!</h1>
<form method="POST" action="/names">
	<input name="username" type="text">
	<input name="password" type="password">
	<button type="submit">submit</button>
</form>

<?php require('partials/footer.php'); ?>