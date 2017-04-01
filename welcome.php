<html>
<head></head>
<body>


<?php
$servername = "10.5.18.104";
$username = "14CS10033";
$password = "btech14";
$dbname = "14CS10033";

/// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$fname="";	
$name=$_POST['firstname'];
$id=$_POST['Username'];
$mob=$_POST['mobile'];
$add=$_POST['address'];
$pss = $_POST['Password'];

$sql = "select  customer_id from Customer where customer_id='$id' ";
$result = $conn->query($sql);
if(($result->num_rows) >0)
{
	header("Location: reg_error.php");
}
else
{



$sql = "insert into Customer (customer_id,customer_name,mobile,address) values ('$id','$name','$mob','$add')";
$conn->query($sql);

$sql = "insert into pass (customer_id,pwd) values ('$id','$pss')";
$conn->query($sql);

header("Location: Home_page.php");
}
?>


</body>
</html>