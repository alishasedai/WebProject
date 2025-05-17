<?php
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    $_SESSION['error'] = "You must log in first.";
    header("Location: " . url('login.php'));
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h2>Hello, <?= htmlentities($_SESSION['username']); ?>!</h2>
    <p><a href="<?= url('logout.php'); ?>">Logout</a></p>
    <p><a href="<?= url('add_recipe.php'); ?>">Add Recipe</a></p>
</body>

</html>