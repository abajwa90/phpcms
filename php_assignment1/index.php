<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/admin/style.css">
</head>
<body>
    <?php
        $connection = mysqli_connect('localhost','root','root','music');

        //test local db
        // $connection = mysqli_connect('localhost', 'root', 'root', 'music');
        
        $query = 'SELECT * FROM musicDb';
        $musics = mysqli_query($connection, $query);
        if(mysqli_connect_error()){
            die("Connection error;" . mysqli_connect_error());
        }

    ?>
     <header>
        <div class="header-align-wrap">
            <div class="logo">
            <p ><a href="../../index.php" class="logo-text">Pineapple Music</a></p>
            </div>
            <nav class="menu-wrap">
                <ul>
                    <li class="menu">
                        <a href="/admin/index.php" style="margin-right: 50px;">Admin</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="align-wrap">
        <div class="container">
            <div class="title-wrap">
                <h2 class="sub-title">Favorite Songs</h2>
            </div>
            <?php
                foreach($musics as $music){
                    $timeString = $music['length'];
                    $timeParts = explode(":", $timeString);
                    $minute = $timeParts[1];
                    $second = $timeParts[2]; 
                    if($music['genre'] === "K-POP"){
                        $txtClass = 'orange-color';
                    }else if($music['genre'] === "POP"){
                        $txtClass = 'blue-color';
                    }else{
                        $txtClass = 'default';
                    }
                    echo '<div class="list">
                    <div class="content-wrap">
                        <div class="img-wrap">
                          <img src="'.$music['album_cover'].'" class="img-rounded" alt="album-cover">
                        </div>
                        <div class="card-body">
                        <p class="card-text">'.$music['album_title'].'</p>
                          <h2 class="card-title">'.$music['title'].'</h2>
                          <p class="card-text">'.$music['artist'].'</p>
                          <p class="card-text '.$txtClass.'" style="font-weight:bold;">'.$music['genre'].'</p>
                          <p class="card-text">'.$music['release_date'].'</p>
                          <p class="card-text">'.$minute.'m '.$second.'s</p>
                        </div>
                    </div>
                  </div>';
                }
                ?>
        </div>
    </div>
</body>
</html>

