<html>
<head></head>
<body background="images.jpg">






<div class="restaurants" >

<form name="SignUpForm"  onsubmit="return validateForm()"  action="welcome.php" method="post">  <!--  Insert the fom php page -->

    <h1> CUSTOMER REGISTRATION FORM </h1>
  <br><br>

  First name:  
  <input type="text" name="firstname" value=""> <br><br>

  Last name:  
  <input type="text" name="lastname" value=""> <br><br>

  
  Gender : 
  
  <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other  <br><br>
    
  Email-Id :  
  <input type="text" name="emailid" value=" ">  <br> <br>
  
  Phone Number :  
  <input type="text" name="mobile" value=" ">  <br> <br>

  Address  :  
  <input type="text" name="address" value=" ">  <br> <br>

  User name:  
  <input type="text" name="Username" value=""> <br><br>


  Password :
  <input type="password" name="Password" value=""> <br> <br>

 

  


 

  <br><br>



 

 
  <input type="submit" value="SignUp"> 
 
  <input type="reset"> <br>
  


</form> 

</div>
</body>
</html>

