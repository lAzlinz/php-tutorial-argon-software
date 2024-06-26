<?php require('partials/head.php'); ?>

<h1>Submit Your Name!</h1>
<form method="POST" action="/names">
	<input name="name" type="text">
	<button type="submit">submit</button>
</form>

<?php require('partials/footer.php'); ?>