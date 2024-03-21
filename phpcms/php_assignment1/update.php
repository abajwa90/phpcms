<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css"> 

</head>
<body>
<?php 
  include('common/header.php');
  include('common/connection.php');
  $id = $_GET['music_id'];
  $query = "SELECT * FROM music WHERE `music_id` = '$id'";
  $music = mysqli_query($connection, $query);

  $result = $music -> fetch_assoc();

?>

<div class="align-wrap">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="sub-title" style="font-family: var( --main-font); color: var( --darkblue );">
          Edit Your Song List
        </h1>
      </div>
    </div>
    <div class="row">
      <form method="POST" action="updateSong.php">
      <input type="hidden" name="music_id" value ="<?php echo $result['music_id'];?>">
        <div class="form-input mb-3">
          <label for="Album_title" class="form-label">Album Title</label>
          <input type="text" class="form-control" id="Album_title" name="Album_title" value="<?php echo $result['Album_title'];?>" aria-describedby="Album Title">
        </div>
        <div class="form-input mb-3">
          <label for="Title" class="form-label">Song Title</label>
          <input type="text" class="form-control" id="Title" name="Title" value="<?php echo $result['Title'];?>" aria-describedby="Title">
        </div>
        <div class="form-input mb-3">
          <label for="Artist" class="form-label">Artist</label>
          <input type="text" class="form-control" id="Artist" name="Artist" value="<?php echo $result['Artist'];?>" aria-describedby="Artist">
        </div>
        <div class="form-input mb-3">
          <label for="Genre" class="form-label">Genre</label>
          <input type="text" class="form-control" id="Genre" name="Genre" value="<?php echo $result['Genre']?>" aria-describedby="Genre">
        </div>
        <div class="form-input mb-3">
          <label for="Release_date" class="form-label">Release Date</label>
          <input type="text" class="form-control" id="Release_date" name="Release_date" aria-describedby="Release Date" value="<?php echo $result['Release_date'];?>">
        </div>
        <div class="form-input mb-3">
          <label for="Song_length" class="form-label">Song Length</label>
          <input type="text" class="form-control" id="Song_length" name="Song_length" aria-describedby="Song Length" value="<?php echo $result['Song_length'];?>">
        </div>
        <div class="form-input mb-3">
          <label for="Album_cover" class="form-label">Album Cover</label>
          <input type="text" class="form-control" id="Album_cover" name="Album_cover" aria-describedby="Album_cover" value="<?php echo $result['Album_cover'];?>">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update Song</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
