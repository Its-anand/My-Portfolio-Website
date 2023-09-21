<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "anandcho_databases";

// $username = "anandcho_anandy";
// $password = "1qtH^#i?bp[a";
// $db = "id19096300_account";
$con = new mysqli($server, $username, $password, $db);
mysqli_set_charset($con, "utf8");
// if ($con->connect_error) {
//     die("Connection failed: " . $con->connect_error);
// }
// echo "Connected successfully";
?>
