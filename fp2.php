
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <style type="text/css">
input{
            background-color: #e00202;
            border: none;
            border-radius: 2px;
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            color: #f4f4f4;
            cursor: pointer;
            font-family: 'Open Sans', Arial, Helvetica, sans-serif;
            height: 40px;
            text-transform: uppercase;
            width: 200px;
            -webkit-appearance:none;
        }
</style>
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



$un = $_POST['uname'];
if($un=="")
{
	header("Location: wait.php");
}


$sql = "select pwd from pass where customer_id = '$un'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
          $tpad = $row['pwd'];
     }
     echo " <h1 align='center'>Your Password for $un is<br><h2 align='center'>  $tpad</h2><br><br> ";
    // echo '"<h2>Your password for ".$un ."is  <br></h2><h3>".$tpad."</h3><br><br>"';
    echo "<form action='/index.php' align='center'><input type='submit' value='Try Logging in again' /></form>";


} 
else
{
    header("Location: wait.php");

}


 

?>

<!--<div style='text-align:center'><h2>Your password for ".$un." is  <br></h2><h3>".$tpad."</h3><br><br></div>";
-->
</body>
</html>