<?php
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );
define( 'DB_NAME', 'erms' );

$con = mysqli_connect( 'localhost', 'root', '', 'erms' );
if ( mysqli_connect_errno() ) {
    echo 'Failed to connect to MySQL: ' . mysqli_connect_error();

}  