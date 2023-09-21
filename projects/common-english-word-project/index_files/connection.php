<?php
$server = "localhost";
$username = "anandcho_anand";
$password = "1qtH^#i?bp[a";
$db = "anandcho_databases";

$con = new mysqli($server, $username, $password, $db);
mysqli_set_charset($con, "utf8");
/*if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";*/
?>