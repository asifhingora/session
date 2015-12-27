<?php 
session_start();
if (isset($_SESSION['name'])==false) 
{
header("locaion:login.php");
}
echo "<h1>Welcome " . $_SESSION['name'] . "</h1>";

echo  "<br>";
echo "<a href='logout.php'>Logout</a>";


?>