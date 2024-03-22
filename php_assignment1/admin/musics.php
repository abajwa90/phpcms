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

<h2>Manage Musics</h2>
<p><a href="music_add.php"><i class="fas fa-plus-square"></i> Add Project</a></p>
<table>
  <tr>
    <th align="center">ID</th>
    <th align="left">Album Cover</th>
    <th align="center">Title</th>
    <th align="center">Artist</th>
  </tr>
  <?php while( $music = mysqli_fetch_assoc( $musics ) ): ?>
    <tr>
        <td><?php echo $music['music_id']; ?></td>
        <td><img src=<?php echo $music['album_cover']; ?> width="300" height="300"></td>
        <td><?php echo htmlentities( $music['title'] ); ?></td>
        <td><?php echo htmlentities( $music['artist']); ?></td>
        <td><a href="music_edit.php?id=<?php echo $music['music_id']; ?>">Edit</i></a></td>
        <td><a href="musics.php?delete=<?php echo $music['music_id']; ?>" onclick="javascript:confirm('Are you sure you want to delete this project?');">Delete</i></a></td>
    </tr>
  <?php endwhile; ?>
</table>




<?php

include( 'common/footer.php' );

?>