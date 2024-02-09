<?php 
$db_host = 'HOST';
$db_user = 'root';
$db_password = 'PASSWORD';
$db_base = 'root';

$connect = mysqli_connect($db_host, $db_user, $db_password, $db_base);

if(mysqli_connect_errno()) {
    die(''. mysqli_connect_error());
}
?>