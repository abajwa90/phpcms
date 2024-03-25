<?php

include( 'common/connection.php' );
include( 'common/config.php' );
include( 'common/functions.php' );

secure();

if( isset( $_GET['delete'] ) )
{
  
  $query = 'DELETE FROM users
    WHERE id = '.$_GET['delete'].'
    LIMIT 1';
  mysqli_query( $connection, $query );
  
  set_message( 'User has been deleted' );
  
  header( 'Location: users.php' );
  die();
  
}

include( 'common/header.php' );

$query = 'SELECT *
  FROM users 
  '.( ( $_SESSION['id'] != 1 and $_SESSION['id'] != 4 ) ? 'WHERE id = '.$_SESSION['id'].' ' : '' ).'
  ORDER BY lname,fname';
$result = mysqli_query( $connection, $query );

?>
<div class="admin-content-wrap">
<h2>Manage Users</h2>
<p><a href="users_add.php" class="btn">Add User</a></p>
<table class="table">
  <tr>
    <th scope="col" align="center">ID</th>
    <th scope="col" align="left">Name</th>
    <th scope="col" align="left">Email</th>
    <th scope="col"></th>
    <th scope="col"></th>
    <th scope="col">Active</th>
  </tr>
  <?php while( $record = mysqli_fetch_assoc( $result ) ): ?>
    <tr>
      <td align="left"><?php echo $record['id']; ?></td>
      <td align="left"><?php echo htmlentities( $record['fname'] ); ?> <?php echo htmlentities( $record['lname'] ); ?></td>
      <td align="left"><a href="mailto:<?php echo htmlentities( $record['email'] ); ?>"><?php echo htmlentities( $record['email'] ); ?></a></td>
      <td align="center"><a href="users_edit.php?id=<?php echo $record['id']; ?>" class="btn btn-success" style="margin-bottom:0">Edit</a></td>
      <td align="center">
        <?php if( $_SESSION['id'] != $record['id'] ): ?>
          <a href="users.php?delete=<?php echo $record['id']; ?>" class="btn btn-danger">Delete</a>
        <?php endif; ?>
      </td>
      <td align="left">
        <?php echo $record['active']; ?>
      </td>
    </tr>
  <?php endwhile; ?>
</table>


</div>

<?php

include( 'common/footer.php' );

?>