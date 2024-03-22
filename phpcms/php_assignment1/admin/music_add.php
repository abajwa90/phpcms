<?php

include( 'common/connection.php' );
include( 'common/config.php' );
include( 'common/functions.php' );

secure();

if( isset( $_POST['submit'] ) )
{
  
  if( $_POST['submit'] and $_POST['title'] )
  {
    
    $query = 'INSERT INTO musicDb (
        title,
        artist,
        album_title,
        genre,
        release_date,
        length,
        album_cover
      ) VALUES (
         "'.mysqli_real_escape_string( $connection, $_POST['title'] ).'",
         "'.mysqli_real_escape_string( $connection, $_POST['artist'] ).'",
         "'.mysqli_real_escape_string( $connection, $_POST['album_title'] ).'",
         "'.mysqli_real_escape_string( $connection, $_POST['genre'] ).'",
         "'.mysqli_real_escape_string( $connection, $_POST['release_date'] ).'",
         "'.mysqli_real_escape_string( $connection, $_POST['length'] ).'",
         "'.mysqli_real_escape_string( $connection, $_POST['album_cover'] ).'"
      )';
    mysqli_query( $connection, $query );
    
    set_message( 'Music has been added' );
    
  }
  
  header( 'Location: musics.php' );
  die();
  
}

include( 'common/header.php' );

?>

<h2>Add Music</h2>
<div class="row">
    <form method="POST">
        <div class="form-input mb-3">
          <label for="album_title" class="form-label">Album Title</label>
          <input type="text" class="form-control" id="album_title" name="album_title" aria-describedby="Album Title">
        </div>
        <div class="form-input mb-3">
          <label for="title" class="form-label">Song Title</label>
          <input type="text" class="form-control" id="title" name="title" aria-describedby="Title">
        </div>
        <div class="form-input mb-3">
          <label for="artist" class="form-label">Artist</label>
          <input type="text" class="form-control" id="artist" name="artist" aria-describedby="Artist">
        </div>
        <div class="form-input mb-3">
          <label for="genre" class="form-label">Genre</label>
          <input type="text" class="form-control" id="genre" name="genre" aria-describedby="Genre">
        </div>
        <div class="form-input mb-3">
        <label for="Release_date" class="form-label">Release Date</label>
             <div class="row">
            <div class="form-group col-md-6">
                <label for="release_date">Date</label>
                <div class="input-group date">
                <input type="date" class="form-control" id="release_date" name="release_date">
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="form-input mb-3">
          <label for="length" class="form-label">Song Length</label>
          <input type="text" class="form-control" id="length" name="length" placeholder="00:00:00" aria-describedby="Song Length">
        </div>
        <div class="form-input mb-3">
          <label for="album_cover" class="form-label">Album Cover</label>
          <input type="text" class="form-control" id="album_cover" name="album_cover" placeholder="Enter the url to your album cover here!"  aria-describedby="Album_cover">
        </div>
        <button name="submit" class="btn btn-primary" type="submit" value="Add Music">Add Music</button>
    </form>
</div>


<p><a href="musics.php"><i class="fas fa-arrow-circle-left"></i> Return to Music List</a></p>


<?php

include( 'common/footer.php' );

?>