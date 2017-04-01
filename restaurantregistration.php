<!DOCTYPE HTML>

<html>

<head>

<title> Welcome To Tomatoes </title>


    <style type="text/css">
        body {
            background-image:url("mi4.jpg");
            background-position: center top;
            background-size: 100% auto;

            
        }

	

	div.restaurants {
    		
		background-color: black;
 	   	color: white;
    		margin: 100px 350px 100px 200px;
		padding :50px;
	}

	div.box {
    		
		background-color: blue;
 	   	color: black;
    		margin:  100px 100px 100px 100px;
    		padding: 50px;

	}
	
 
</style>

<script>

function validateForm() {
    var x = document.forms["SignUpForm"]["firstname"].value;
    var y =document.forms["SignUpForm"]["lastname"].value;
    var z=document.forms["SignUpForm"]["emailid"].value;
    var w=document.forms["SignUpForm"]["Password"].value;

    if (x == "") {
        alert("First Name must be filled out");
        return false;
    }
    if (y == "") {
        alert("Last Name must be filled out");
        return false;
    }

  if (z == "") {
        alert("Emailid must be filled out");
        return false;
    }

  if (w == "") {
        alert("Password must be filled out");
        return false;
    }
	

}

 function addrest(){

	var x=document.forms["SignupForm"]["Addrestuarant"].value;
	document.getElementById("temp").innerHTML = x;
        return true;
	
 }

 function addfood(){

	var x=document.forms["SignupForm"]["Addfoods"].value;
	document.getElementById("tempo").innerHTML = x;
        return true;
	
 }

</script>



</head>

<body background="images (1).jpg">

<div class="restaurants">

	<h1> RESTAURANT REGISTRATION FORM  </h1>
  <div align="center">
<form name="SignUpForm"  onsubmit="return validateForm()"  action="resdb.php" method="post">  <!--  Insert the fom php page -->

 Restaurant name:
  <input type="text" name="restaurantname" value=""> <br><br>

  Owner name:  
  <input type="text" name="ownername" value=""> <br><br>
 
  
	
  Email-Id :  
  <input type="text" name="emailid" value=" ">  <br> <br>
  
  User Name:  
  <input type="text" name="username" value=""> <br><br>

  Password :
  <input type="password" name="Password" value=""> <br> <br>


  
  Address : <br>
  
	<textarea name="Address" cols="40" rows="5"></textarea>


  
  <br><br><br><br>

    City :
      <select name="City">
    <option value="Delhi">Delhi</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Chennai" selected>Chennai</option>
    <option value="Kolkata">Kolkata</option>
    <option value="Hyderabad">Hyderabad</option>
    <option value="Bangalore">Bangalore</option>
    </select>
    <br><br>
    

    State: 
   <input type ="text" name="State" value="" > <br><br>


	
    Country: 
    <input type ="text" name="Country" value="" > <br><br>
   
    

  
     Phone : 
  <input type ="text" name="phone" value="" > <br><br>

  
     
     
  


<!--             -->

  
  <!-- div class="restaurants" -->

  Foods Served :
  <br>
  
 <input type="checkbox" name="Food_sel[]" value="Roti"> Roti<br>
 <input type="checkbox" name="Food_sel[]" value="Pizza"> Pizza<br>
 <input type="checkbox" name="Food_sel[]" value="Burger"> Burger<br>
 <input type="checkbox" name="Food_sel[]" value="Biriyani"> Biriyani<br>
 <input type="checkbox" name="Food_sel[]" value="Noodles" > Noodles<br>
 <input type="checkbox" name="Food_sel[]" value="Soup"> Soup<br>
 <input type="checkbox" name="Food_sel[]" value="Paneer Masala"> Paneer Masala<br>
 <input type="checkbox" name="Food_sel[]" value="Chicken Lamba"> Chicken Lamba<br>


  

 

  <br><br>
 
  <input type="submit" value="SignUp"> 
 
  <input type="reset"> <br>
  


</form> 
</div>




</div>

</body>



</html>

