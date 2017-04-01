<?php
   session_start();
   $servername = "10.5.18.104";
$username = "14CS10033";
$password = "btech14";
$dbname = "14CS10033";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


   $sql = "delete from cart";
    $conn->query($sql);
     $sql = "delete from total";
    $conn->query($sql);
   
   if(session_destroy()) {
      header("Location: index.php");
   }
?>