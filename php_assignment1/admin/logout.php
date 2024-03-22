<?php

include( 'common/config.php' );

session_destroy();

header( 'Location: index.php' );