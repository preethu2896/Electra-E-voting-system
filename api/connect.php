<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'voter_db';

// Create connection
$con = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

// Check connection
if ($con->connect_error) {
    die('Connection failed: ' . $con->connect_error);
}

return $con;
?>