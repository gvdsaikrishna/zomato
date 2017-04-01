<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pss']); 
      
      $sql = "SELECT customer_id FROM pass WHERE customer_id = '$myusername' and pwd = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {

         $_SESSION['login_user'] = $myusername;
         
         header("location: Home_page.php");
      }else {
         $error = "YOUR CREDENTIALS ARE INVALID";
      }
   }
?>
<!DOCTYPE html>
<html>
<head>

</script>
</head>
<body>



<style type "text/css">
<!--
/* @group Blink */
.blink {
    -webkit-animation: blink 2.0s linear infinite;
    -moz-animation: blink .75s linear infinite;
    -ms-animation: blink .75s linear infinite;
    -o-animation: blink .75s linear infinite;
     animation: blink 1.2s linear infinite;
}
@-webkit-keyframes blink {
    0% { opacity: 1; }
    50% { opacity: 1; }
    50.01% { opacity: 0; }
    100% { opacity: 0; }
}
@-moz-keyframes blink {
    0% { opacity: 1; }
    50% { opacity: 1; }
    50.01% { opacity: 0; }
    100% { opacity: 0; }
}
@-ms-keyframes blink {
    0% { opacity: 1; }
    50% { opacity: 1; }
    50.01% { opacity: 0; }
    100% { opacity: 0; }
}
@-o-keyframes blink {
    0% { opacity: 1; }
    50% { opacity: 1; }
    50.01% { opacity: 0; }
    100% { opacity: 0; }
}
@keyframes blink {
    0% { opacity: 1; }
    50% { opacity: 1; }
    50.01% { opacity: 0; }
    100% { opacity: 0; }
}
/* @end */
-->
</style>



    <meta charset="utf-8">
    <title>tomato.com</title>
    <style type="text/css">
        body {
            background-image:url("mi2.jpg");
            background-position: center top;
            background-size: 100% auto;

            
        }
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
            width: 200px;
            -webkit-appearance:none;
        }
        a { text-decoration: none; }
        h1 { font-size: 1.5em; }
        h1, p {
            margin-bottom: 10px;
        }
        strong {
            font-weight: bold;
        }
        

        /* ---------- LOGIN ---------- */
        #login {
            margin: 50px auto;
            width: 300px;
        }
        form fieldset input[type="text"], input[type="password"] {
            background-color: #e5e5e5;
            border: none;
            border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            color: #5a5656;
            font-family: 'Open Sans', Arial, Helvetica, sans-serif;
            font-size: 14px;
            height: 50px;
            outline: none;
            padding: 0px 10px;
            width: 280px;
            -webkit-appearance:none;
        }
        form fieldset input[type="submit"] {
            background-color: #008dde;
            border: none;
            border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            color: #f4f4f4;
            cursor: pointer;
            font-family: 'Open Sans', Arial, Helvetica, sans-serif;
            height: 50px;
            
            width: 300px;
            -webkit-appearance:none;
        }
        form fieldset a {
            color: #5a5656;
            font-size: 10px;
        }
        form fieldset a:hover { text-decoration: underline; }
        .btn-round {
            background-color: #5a5656;
            border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            color: #f4f4f4;
            display: block;
            font-size: 12px;
            height: 50px;
            line-height: 50px;
            margin: 30px 125px;
            text-align: center;
            
            width: 50px;
        }
        
    </style>
</head>
<body>

 
    <h1><marquee width="30%" bgcolor="Yellow" scrollamount="8" behavior="alternate">WELCOME TO TOMATO </marquee></h1>
    
    
    <div id="login">
    <h1  class="tab blink" align="center">&nbsp&nbsp&nbsp&nbsp PLEASE LOGIN</i></h1>
    <br><br><br>
        
        <br>

        <form action="" method="post">
            <fieldset>
            

                <p><input type="text" placeholder="User name" name="uname" ></p>
                <p><input type="password" placeholder="password" name="pss" ></p>
                
                <p><input type="submit" value="LOGIN"></p>

                <?php echo $error?>

            </fieldset>

        </form>
     </div> <!-- end login -->
        <form action="/fp.php" align="center"><input type="submit" value="    FORGOT PASSWORD ?" /></form>
    <div id="signup">
        <p><style>p.indent{ padding-right: 1.8em }</style></p>
        <p>
        
        <br><br>
        <form action="rough.php"><input type="submit" value="NEW USER REGISTER HERE" /></form>

        </p>
    </div>
</body>
</html>













