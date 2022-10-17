<?php 

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'orphan_mp');

//connacting to the database

$conn =mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
//CHECKING THE CONNECTION

if($conn == false){
    die('unable to connect');
}
?> 