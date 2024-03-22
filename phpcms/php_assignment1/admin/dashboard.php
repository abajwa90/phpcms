<?php

include( 'common/connection.php' );
include( 'common/config.php' );
include( 'common/functions.php' );

secure();

include( 'common/header.php' );

?>

<ul id="dashboard">
  <li>
    <a href="musics.php">
      Manage Projects
    </a>
  </li>
  <li>
    <a href="users.php">
      Manage Users
    </a>
  </li>
  <li>
    <a href="logout.php">
      Logout
    </a>
  </li>
</ul>

<?php

include( 'common/footer.php' );

?>