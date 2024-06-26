<?php

include( 'common/connection.php' );
include( 'common/config.php' );
include( 'common/functions.php' );

secure();

if( !isset( $_GET['id'] ) )
{
  
  header( 'Location: users.php' );
  die();
  
}

if( isset( $_POST['fname'] ) )
{
  
  if( $_POST['fname'] and $_POST['lname'] and $_POST['email'] )
  {
    
    $query = 'UPDATE users SET
      fname = "'.mysqli_real_escape_string( $connection, $_POST['fname'] ).'",
      lname = "'.mysqli_real_escape_string( $connection, $_POST['lname'] ).'",
      email = "'.mysqli_real_escape_string( $connection, $_POST['email'] ).'",
      active = "'.$_POST['active'].'"
      WHERE id = '.$_GET['id'].'
      LIMIT 1';
    mysqli_query( $connection, $query );
    
    if( $_POST['password'] )
    {
      
      $query = 'UPDATE users SET
        password = "'.md5( $_POST['password'] ).'"
        WHERE id = '.$_GET['id'].'
        LIMIT 1';
      mysqli_query( $connection, $query );
      
    }
    
    set_message( 'User has been updated' );
    
  }

  header( 'Location: users.php' );
  die();
  
}


if( isset( $_GET['id'] ) )
{
  
  $query = 'SELECT *
    FROM users
    WHERE id = '.$_GET['id'].'
    LIMIT 1';
  $result = mysqli_query( $connection, $query );
  
  if( !mysqli_num_rows( $result ) )
  {
    
    header( 'Location: users.php' );
    die();
    
  }
  
  $record = mysqli_fetch_assoc( $result );
  
}

include( 'common/header.php' );

?>
<div class="admin-content-wrap">
<h2>Edit User</h2>
<div class="row">
<form method="post">
  
  <div class="form-input mb-3">
    <label for="fname">First:</label>
    <input type="text" name="fname" id="fname" value="<?php echo htmlentities( $record['fname'] ); ?>">
  </div>
  
  <div class="form-input mb-3">
    <label for="lname">Last:</label>
    <input type="text" name="lname" id="lname" value="<?php echo htmlentities( $record['lname'] ); ?>">
  </div>
  
  <div class="form-input mb-3">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?php echo htmlentities( $record['email'] ); ?>">
  </div>
  
  <div class="form-input mb-3">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
  </div>

  <div class="form-input mb-3">
    <label for="active">Active:</label>
    <?php
    
    $values = array( 'YES', 'NO' );
    
    echo '<select name="active" id="active">';
    foreach( $values as $key => $value )
    {
      echo '<option value="'.$value.'"';
      if( $value == $record['active'] ) echo ' selected="selected"';
      echo '>'.$value.'</option>';
    }
    echo '</select>';
    
    ?>
  </div>
  
  <div style="display: flex;">
    <input type="submit" value="Edit User" class="btn btn-primary">
    <p><a href="users.php" class="btn btn-success" style="width: auto; margin-left:16px">Return to User List</a></p>
  </div>
  
</form>
</div>

</div>
<?php

include( 'common/footer.php' );

?>