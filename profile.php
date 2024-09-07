<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location: index.php");
    exit();
}
?>


<!DOCTYPE html>
<hr lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container" style="max-width: 600px">
        <h1 class="h3 my-4">profile</h1>

        <?php if (file_exists("_actions/photos/profiles.jpeg")): ?>
            <img src="_actions/photos/profiles.jpeg" width="300" class="img-thumbnail">
        <?php endif ?>

        <form action="_actions/upload.php" class="input-group my-2"
            method="post" enctype="multipart/form-data">
            <input type="file" name="photo" class="form-control">
            <button class="btn btn-secondary">Upload</button>
        </form>

        <ul class="list-group mb-2">
            <li class="list-group-item">Name: Alice</li>
            <li class="list-group-item">Email: alice@gmail.com</li>
            <li class="list-group-item">Phone: 09543561</li>
            <li class="list-group-item">Address: Some address</li>
        </ul>

        <a href="_actions/logout.php" class="text-danger">Logout</a>
    </div>
</body>

</html>