<?php
$servername="localhost";
$username="trackhomecare_db";
$password="kHBhxZyJjkCRJxJWpx3K";
$dbname="trackhomecare_db";



// $servername="localhost";
// $username="root";
// $password="";
// $dbname="hhd_db";

try 
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}

date_default_timezone_set("Asia/Kolkata");
$dateTime = date('Y-m-d H:i:s');
$date = date('Y-m-d');
$time = date('H:i:s');

$adminTitle = 'trackhomecare';


?>