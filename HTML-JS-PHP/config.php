<?php 

$server = "localhost";
$user = "id17519492_devweb";
$pass = "IsZ|i0#EZX5Cug0t";
$database = "id17519492_dev_web_ummto";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('La Connection a echouée.')</script>");
}

?>