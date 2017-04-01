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

	
$name=$_POST['restaurantname'];
$mob=$_POST['phone'];
$add=$_POST['Address'];
$city =$_POST['City'];
$pss = $_POST['Password'];
$res_id = $_POST['username'];


$x=  $_POST['Food_sel'];


$sql = "select  customer_id from pass where customer_id='$res_id' ";
$result = $conn->query($sql);
if(($result->num_rows) >0)
{
	header("Location: reg_error.php");
}
else
{


$sql = "select * from Restaurant";
	$result = $conn->query($sql);

$size = $result->num_rows +1;


$food_reg = count($x);

foreach ($x as $ky ) 
{
	$sql = "insert into res_item (res_regno,item) values ('$res_id','$ky')";
	$conn->query($sql);
}





$sql = "insert into Restaurant (restaurant_regno,res_name,contact_no,address,city) values ('$res_id','$name','$mob','$add','$city')";
$conn->query($sql);

$sql = "insert into pass (customer_id,pwd) values ('$res_id','$pss')";

$conn->query($sql);


header("Location: registered.php");
}
?>


</body>
</html>