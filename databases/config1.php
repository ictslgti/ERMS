<?php
define( 'DB_HOST', 'mis.achchuthan.org' );
define( 'DB_USER', 'ermsuser' );
define( 'DB_PASS', '!23$cfDSrt67' );
define( 'DB_NAME', 'erms' );

$con = mysqli_connect( 'mis.achchuthan.org', 'ermsuser', '!23$cfDSrt67', 'erms' );
if ( mysqli_connect_errno() ) {
    echo 'Failed to connect to MySQL: ' . mysqli_connect_error();

}  
?>