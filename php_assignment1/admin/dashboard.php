<?php

include( 'common/connection.php' );
include( 'common/config.php' );
include( 'common/functions.php' );

secure();

include( 'common/header.php' );

?>
<div class="dashboard-outter">
<ul id="dashboard">
  <li>
    <a href="musics.php" class="btn">
      Manage Musics
    </a>
  </li>
  <li>
    <a href="users.php" class="btn">
      Manage Users
    </a>
  </li>
</ul>
</div>
<?php

include( 'common/footer.php' );

?>