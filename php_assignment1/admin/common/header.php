<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Website Admin</h1>
    <?php if(isset($_SESSION['id'])): ?>

<p style="padding: 0 1%; text-align: center;">
  <a href="dashboard.php">Dashboard</a> | 
  <a href="logout.php">Logout</a>
</p>

<?php endif; ?>

<hr>

<?php echo get_message(); ?>

<div style="max-width: 1500px; margin: auto; padding: 0 1%;">
