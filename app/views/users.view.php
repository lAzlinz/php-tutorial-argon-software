<?php require('partials/head.php'); ?>
    
    <h1>All Users</h1>

    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= $user->name; ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Submit Your Name!</h1>
    <form method="POST" action="/users">
        <input name="name" type="text">
        <button type="submit">submit</button>
    </form>

<?php require('partials/footer.php'); ?>