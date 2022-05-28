<?php

/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'hotel_royal');

// try connecting to database

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


// check connection

if ($con == false) {
    dir('Error: Cannot Connect to database');
}

?>