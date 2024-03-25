<?php

include( 'common/connection.php' );
include( 'common/config.php' );
include( 'common/functions.php' );

secure();

if( isset( $_GET['delete'] ) )
{
  
  $query = 'DELETE FROM musicDb
    WHERE music_id = '.$_GET['delete'].'
    LIMIT 1';
  mysqli_query( $connection, $query );
    
  set_message( 'Music has been deleted' );
  
  header( 'Location: musics.php' );
  die();
  
}

include( 'common/header.php' );

$query = 'SELECT *
  FROM musicDb
  ORDER BY music_id DESC';
$musics = mysqli_query( $connection, $query );

?>

<div class="admin-content-wrap">
  <h2>Manage Musics</h2>
  <p><a href="music_add.php" class="btn">+ Add Project</a></p>
  <table class="table">
    <tr>
      <th scope="col" align="center">ID</th>
      <th scope="col" align="left">Album Cover</th>
      <th scope="col" align="center">Title</th>
      <th scope="col" align="center">Artist</th>
      <th scope="col" align="center"></th>
      <th scope="col" align="center"></th>
    </tr>
    <?php while( $music = mysqli_fetch_assoc( $musics ) ): ?>
      <tr>
          <td><?php echo $music['music_id']; ?></td>
          <td><img src=<?php echo $music['album_cover']; ?> class="img-wrap"></td>
          <td><?php echo htmlentities( $music['title'] ); ?></td>
          <td><?php echo htmlentities( $music['artist']); ?></td>
          <td><a href="music_edit.php?id=<?php echo $music['music_id']; ?>" class="btn btn-success">Edit</i></a></td>
          <td><a href="musics.php?delete=<?php echo $music['music_id']; ?>" class="btn btn-danger">Delete</i></a></td>
      </tr>
    <?php endwhile; ?>
  </table>
</div>




<?php

include( 'common/footer.php' );

?>