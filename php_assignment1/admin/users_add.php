<?php

include( 'common/connection.php' );
include( 'common/config.php' );
include( 'common/functions.php' );

secure();

if( isset( $_POST['fname'] ) )
{
  
  if( $_POST['fname'] and $_POST['lname'] and $_POST['email'] and $_POST['password'] )
  {
    
    $query = 'INSERT INTO users (
        fname,
        lname,
        email,
        password,
        active
      ) VALUES (
        "'.mysqli_real_escape_string( $connection, $_POST['fname'] ).'",
        "'.mysqli_real_escape_string( $connection, $_POST['lname'] ).'",
        "'.mysqli_real_escape_string( $connection, $_POST['email'] ).'",
        "'.md5( $_POST['password'] ).'",
        "'.$_POST['active'].'"
      )';
    mysqli_query( $connection, $query );
    
    set_message( 'User has been added' );
    
  }

  /*
  // Example of debugging a query
  print_r($_POST);
  print_r($query);
  die();
  */

  header( 'Location: users.php' );
  die();
  
}

include( 'common/header.php' );

?>
<div class="admin-content-wrap">
<h2>Add User</h2>
<div class="row">
<form method="post">
  <div class="form-input mb-3">
    <label for="fname">First Name:</label>
    <input type="text" name="fname" id="fname">
  </div>
  <div class="form-input mb-3">
    <label for="lname">Last Name:</label>
    <input type="text" name="lname" id="lname">
  </div>
  <div class="form-input mb-3">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
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
      echo '>'.$value.'</option>';
    }
    echo '</select>';
    
    ?>
  </div>
  <div style="display: flex;">
    <input type="submit" value="Add User" class="btn btn-primary">
    <p><a href="users.php" class="btn btn-success" style="width: auto; margin-left:16px">Return to User List</a></p>
  </div>
  
  
</form>
</div>
</div>

<?php

include( 'common/footer.php' );

?>