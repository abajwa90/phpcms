<?php

include( 'common/connection.php' );
include( 'common/config.php' );
include( 'common/functions.php' );

if( isset( $_POST['email'] ) )
{
  
  $query = 'SELECT *
    FROM users
    WHERE email = "'.$_POST['email'].'"
    AND password = "'.md5( $_POST['password'] ).'"
    AND active = "YES"
    LIMIT 1';
  $result = mysqli_query( $connection, $query );
  
  if( mysqli_num_rows( $result ) )
  {
    
    $record = mysqli_fetch_assoc( $result );
    
    $_SESSION['id'] = $record['id'];
    $_SESSION['email'] = $record['email'];
    
    header( 'Location: dashboard.php' );
    die();
    
  }
  else
  {
    
    set_message( 'Incorrect email and/or password' );
    
    header( 'Location: index.php' );
    die();
    
  } 
  
}

include( 'common/header.php' );

?>
<div class="login-outter">
  <div class="login-wrap">
    <h2>Log in</h2>
    <form method="post">

      <div class="form-input mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" aria-describedby="email">
      </div>

      <br>
      <div class="form-input mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password" aria-describedby="password">
      </div>
      <br>
      <input type="submit" value="Login" class="btn btn-primary" style="margin: auto;">

    </form>
    
  </div>
</div>

<?php

include( 'common/footer.php' );

?>