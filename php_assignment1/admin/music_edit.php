<?php

include( 'common/connection.php' );
include( 'common/config.php' );
include( 'common/functions.php' );

secure();

if( !isset( $_GET['id'] ) )
{
  
  header( 'Location: musics.php' );
  die();
  
}

if( isset( $_POST['submit'] ) )
{
  
  if( $_POST['submit'] and $_POST['title'] )
  {
    
    $query = 'UPDATE musicDb SET
      title = "'.mysqli_real_escape_string( $connection, $_POST['title'] ).'",
      artist = "'.mysqli_real_escape_string( $connection, $_POST['artist'] ).'",
      album_title = "'.mysqli_real_escape_string( $connection, $_POST['album_title'] ).'",
      genre = "'.mysqli_real_escape_string( $connection, $_POST['genre'] ).'",
      release_date = "'.mysqli_real_escape_string( $connection, $_POST['release_date'] ).'",
      length = "'.mysqli_real_escape_string( $connection, $_POST['length'] ).'",
      album_cover = "'.mysqli_real_escape_string( $connection, $_POST['album_cover'] ).'"
      WHERE music_id = '.$_GET['id'].'
      LIMIT 1';
    mysqli_query( $connection, $query );
    
    set_message( 'Music has been updated' );
    
  }

  header( 'Location: musics.php' );
  die();
  
}


if( isset( $_GET['id'] ) )
{
  
  $query = 'SELECT *
    FROM musicDb
    WHERE music_id = '.$_GET['id'].'
    LIMIT 1';
  $musics = mysqli_query( $connection, $query );
  
  if( !mysqli_num_rows( $musics ) )
  {
    
    header( 'Location: musics.php' );
    die();
    
  }
  
  $music = mysqli_fetch_assoc( $musics );
  
}

include( 'common/header.php' );

?>

<h2>Edit Music</h2>
<div class="row">
    <form method="POST">
        <div class="form-input mb-3">
          <label for="album_title" class="form-label">Album Title</label>
          <input type="text" name="album_title" id="album_title" value="<?php echo htmlentities( $music['album_title'] ); ?>">
        </div>
        <div class="form-input mb-3">
          <label for="title" class="form-label">Song Title</label>
          <input type="text" name="title" id="title" value="<?php echo htmlentities( $music['title'] ); ?>">
        </div>
        <div class="form-input mb-3">
          <label for="artist" class="form-label">Artist</label>
          <input type="text" name="artist" id="artist" value="<?php echo htmlentities( $music['artist'] ); ?>">
        </div>
        <div class="form-input mb-3">
          <label for="genre" class="form-label">Genre</label>
          <input type="text" name="genre" id="genre" value="<?php echo htmlentities( $music['genre'] ); ?>">
        </div>
        <div class="form-input mb-3">
        <label for="Release_date" class="form-label">Release Date</label>
             <div class="row">
            <div class="form-group col-md-6">
                <label for="release_date">Date</label>
                <div class="input-group date">
                <input type="date" class="form-control" id="release_date" name="release_date" value="<?php echo $music['release_date'];?>">
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="form-input mb-3">
          <label for="length" class="form-label">Song Length</label>
          <input type="text" class="form-control" id="length" name="length" value="<?php echo $music['length'];?>">
        </div>
        <div class="form-input mb-3">
          <label for="album_cover" class="form-label">Album Cover</label>
          <input type="text" class="form-control" id="album_cover" name="album_cover" value="<?php echo $music['album_cover'];?>">
        </div>
        <button name="submit" class="btn btn-primary" type="submit" value="Add Music">Add Music</button>
    </form>
</div>

<p><a href="musics.php"><i class="fas fa-arrow-circle-left"></i> Return to Music List</a></p>


<?php

include( 'common/footer.php' );

?>