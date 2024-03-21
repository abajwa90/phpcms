<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $connection = mysqli_connect('localhost','root','root','musicdb');

        //test local db
        // $connection = mysqli_connect('localhost', 'root', 'root', 'music');
        
        $query = 'SELECT * FROM music';
        $musics = mysqli_query($connection, $query);
        if(mysqli_connect_error()){
            die("Connection error;" . mysqli_connect_error());
        }

    ?>
    <?php include('common/header.php') ?>
    <div class="align-wrap">
        <div class="container">
            <div class="title-wrap">
                <h2 class="sub-title">Favorite Songs</h2>
            </div>
            <?php
                foreach($musics as $music){
                    $timeString = $music['Song_length'];
                    $timeParts = explode(":", $timeString);
                    $minute = $timeParts[1];
                    $second = $timeParts[2]; 
                    if($music['Genre'] === "K-POP"){
                        $txtClass = 'orange-color';
                    }else if($music['Genre'] === "POP"){
                        $txtClass = 'blue-color';
                    }else{
                        $txtClass = 'default';
                    }
                    echo '<div class="list">
                    <div class="content-wrap">
                        <div class="img-wrap">
                          <img src="'.$music['Album_cover'].'" class="img-rounded" alt="album-cover">
                        </div>
                        <div class="card-body">
                        <p class="card-text">'.$music['Album_title'].'</p>
                          <h2 class="card-title">'.$music['Title'].'</h2>
                          <p class="card-text">'.$music['Artist'].'</p>
                          <p class="card-text '.$txtClass.'" style="font-weight:bold;">'.$music['Genre'].'</p>
                          <p class="card-text">'.$music['Release_date'].'</p>
                          <p class="card-text">'.$minute.'m '.$second.'s</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form method="GET" action="update.php">
                        <input type="hidden" name="music_id" value="'. $music['music_id'] .'">
                        <button type="submit" name="edit" class="btn btn-success">Edit</button>
                        </form>
                        <form method="POST" action="deleteSong.php">
                         <input type="hidden" name="music_id" value="'. $music['music_id'] .'">
                        <button type="submit" name="delete" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                  </div>';
                }
                ?>
        </div>
    </div>
</body>
</html>

