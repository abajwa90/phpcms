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

<h2>Manage Users</h2>

<table>
  <tr>
    <th align="center">ID</th>
    <th align="left">Name</th>
    <th align="left">Email</th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
  <?php while( $record = mysqli_fetch_assoc( $result ) ): ?>
    <tr>
      <td align="center"><?php echo $record['id']; ?></td>
      <td align="left"><?php echo htmlentities( $record['fname'] ); ?> <?php echo htmlentities( $record['lname'] ); ?></td>
      <td align="left"><a href="mailto:<?php echo htmlentities( $record['email'] ); ?>"><?php echo htmlentities( $record['email'] ); ?></a></td>
      <td align="center"><a href="users_edit.php?id=<?php echo $record['id']; ?>">Edit</a></td>
      <td align="center">
        <?php if( $_SESSION['id'] != $record['id'] ): ?>
          <a href="users.php?delete=<?php echo $record['id']; ?>" onclick="javascript:confirm('Are you sure you want to delete this user?');">Delete</a>
        <?php endif; ?>
      </td>
      <td align="center">
        <?php echo $record['active']; ?>
      </td>
    </tr>
  <?php endwhile; ?>
</table>

<p><a href="users_add.php"><i class="fas fa-plus-square"></i> Add User</a></p>


<?php

include( 'common/footer.php' );

?>