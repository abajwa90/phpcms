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
  include('common/header.php');?>

<div class="align-wrap">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="sub-title" style="margin-bottom: 40px; font-family: var( --main-font); color: var( --darkblue );">
          Add a Song to Your List
        </h1>
      </div>
    </div>
    <div class="row">
      <form method="POST" action="addSong.php">
        <div class="form-input mb-3">
          <label for="Album_title" class="form-label">Album Title</label>
          <input type="text" class="form-control" id="Album_title" name="Album_title" aria-describedby="Album Title">
        </div>
        <div class="form-input mb-3">
          <label for="Title" class="form-label">Song Title</label>
          <input type="text" class="form-control" id="Title" name="Title" aria-describedby="Title">
        </div>
        <div class="form-input mb-3">
          <label for="Artist" class="form-label">Artist</label>
          <input type="text" class="form-control" id="Artist" name="Artist" aria-describedby="Artist">
        </div>
        <div class="form-input mb-3">
          <label for="Genre" class="form-label">Genre</label>
          <input type="text" class="form-control" id="Genre" name="Genre" aria-describedby="Genre">
        </div>
        <div class="form-input mb-3">
        <label for="Release_date" class="form-label">Release Date</label>
             <div class="row">
            <div class="form-group col-md-6">
                <label for="date">Date</label>
                <div class="input-group date">
                <input type="date" class="form-control" id="Release_date" name="Release_date">
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="form-input mb-3">
          <label for="Song_length" class="form-label">Song Length</label>
          <input type="text" class="form-control" id="Song_length" name="Song_length" placeholder="00:00:00" aria-describedby="Song Length">
        </div>
        <div class="form-input mb-3">
          <label for="Album_cover" class="form-label">Album Cover</label>
          <input type="text" class="form-control" id="Album_cover" name="Album_cover" placeholder="Enter the url to your album cover here!"  aria-describedby="Album_cover">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add Song</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
