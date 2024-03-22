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

<h2>Add User</h2>

<form method="post">
  
  <label for="fname">First Name:</label>
  <input type="text" name="fname" id="fname">
  
  <br>
  
  <label for="lname">Last Name:</label>
  <input type="text" name="lname" id="lname">
  
  <br>
  
  <label for="email">Email:</label>
  <input type="email" name="email" id="email">
  
  <br>
  
  <label for="password">Password:</label>
  <input type="password" name="password" id="password">
  
  <br>
  
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
  
  <br>
  
  <input type="submit" value="Add User">
  
</form>

<p><a href="users.php"><i class="fas fa-arrow-circle-left"></i> Return to User List</a></p>


<?php

include( 'common/footer.php' );

?>