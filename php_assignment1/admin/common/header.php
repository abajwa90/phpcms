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
    <?php if(isset($_SESSION['id'])): ?>
<header>
        <div class="header-align-wrap">
            <div class="logo">
                <p ><a href="../../index.php" class="logo-text">Pineapple Music</a></p>
            </div>
            <nav class="menu-wrap">
                <ul>
                    <li class="menu">
                        <a href="dashboard.php">Dashboard</a> | 
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

<?php endif; ?>

<?php echo get_message(); ?>

