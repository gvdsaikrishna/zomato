

<?php
   include('session.php');
?>
<html  lang="en"  prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8" />
    <meta content="origin" name="referrer" />
    

    
    <title>Best Restaurants in India - Tomato</title>
    <meta name="description" content="India Restaurants - Find the best restaurants, cafés and bars in India on Zomato. View Menus, Photos, Ratings and User Reviews for Top restaurants in India." />
    <meta name="robots" content="NOODP,NOYDIR" />
            <meta name="keywords" content="">
            <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, initial-scale=1">
    
    
    
    
       

       

    <script type="text/javascript">
            </script>

        <link rel="stylesheet" type="text/css" href="https://static.zmtcdn.com/gencss/t-fce05e705b469d889fdc20033ca4cdb8/l-H4sIAAAAAAAAA0tKLE7Vz0nVTS_KTNFLLi7WqcrPTUosKYawi0sSSzKTwezi1NzEPCBHH8YAiQIAP2LJTT4AAAA/h-5a46aab04da289624304a026b6d1c571" />
    
        <script type="text/javascript"></script>        <script type="text/javascript">
            window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;

            // t3 => web/restaurants
            // t7 => aggregate
            // t4 => country
            // t5 => international
            // t6 => iframe
            // t2 => business + nye


                            ga('create', {
                    trackingId: 'UA-19617341-2',
                    cookieDomain: 'auto',
                    name: 'city'
                });
                ga('city.send', 'pageview');
            
                            ga('create', {
                    trackingId: 'UA-19617341-30',
                    cookieDomain: 'auto',
                    name: 'country'
                });
                ga('country.send', 'pageview');
            
            ga('create', {
                trackingId: 'UA-19617341-21',
                cookieDomain: 'auto',
                name: 'global'
            });

            
            ga('global.set', 'dimension1', false);
            ga('global.set', 'dimension2', "India");
            ga('global.set', 'dimension3', "Delhi NCR");
            ga('global.set', 'dimension4', "Others");
            ga('global.send', 'pageview');


            
        </script>
   

    
</head>
<body class="is-responsive en"  >
<script type="text/javascript">
    window.onbeforeunload = function() {
        return 'If you resubmit this page, progress will be lost.';
    };
</script>

            
    <script>dataLayer = [];</script>

    <div class="ghboxcontainer"  style="visibility: hidden; display: none;"><div id="ghbox"></div></div>

    
        
        
<div class="start">
    

        <div class="zimagery" style="background-image: url(mp2.jpg);; background-size: cover;">
            <div class="zimagery-overlay" style="background: rgba(0,0,0,0.4);"><div id="sticky_header" class="ui sticky">
<header class="header " id="header">
    
    <div class="wrapper">
        <div class="row">
            <div class="col-l-2 col-s-16 header--logo-container">
                                
    
                
                                    
                
                            </div>
            <div class="col-l-16 header--search-container">
                <div class="row clearfix">
                    <div class="logo-and-hiring flex-shrink-0">
                                                                              
</a>
                                            </div>
                    <div class="alpha flex-shrink-1">
                                            </div>
                    <div class="nav flex-shrink-0">
                        <div class="right">
                            
                                    



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</div>
<div id="resp-search-container" class="search-box-area"></div>
    <div class="h-city-main p-relative wrapper">
        <div class="logo--home">
            <a class="logo--header" href="Home_page.php" title="Best Restaurants in India">
    <img src="t.jpg" alt="Best Restaurants in India" />
</a>
        </div>
        <div class="header-link pr10" style="float:right">
            <a class="header-app-order-btn order-online ui orange button" href="checkout.php">
                                                            Cart
                                                </a>
                    </div>
        <div class="header-link pr10" style="float:right">
            <a class="header-app-order-btn order-online ui orange button" href="signout.php">
                                                            Sign out
                                                </a>
                    </div>

        <marquee scrollamount='18' width='70%' behavior='scroll'><h1 class="h-city-home-title" style="color:White;">
            Welcome to Tomato.....The online food Store        </h1></marquee>

            </div>

    </div> <!-- zimagery-overlay -->
            </div> <!-- zimagery -->    <div class="wrapper"><section class="mtop2">
    

    <div class="mtop">
                        
            <ul class="row">
                                <li class="col-l-4 mbot">
<?php
$servername = "10.5.18.104";
$username = "14CS10033";
$password = "btech14";
$dbname = "14CS10033";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
////////////////////



$sql = "select  * from total";
$result = $conn->query($sql);

if($result->num_rows>0)
    {
        
        while($row = $result->fetch_assoc()) 
        {
        
            $tmpamount =$row['amount']; 
            $restaurant_regno = $row['restaurant_regno'];
            $sql = "select  bill_no from Bill";
            $result1 = $conn->query($sql);
            $sz = $result1->num_rows +1;

            $sql = "insert into Bill (bill_no,total_amount,restaurant_reg_no) values('$sz','$tmpamount','$restaurant_regno')";
            $conn->query($sql);

        }
    }  

 $sql = "delete from total";
$result = $conn->query($sql);




$sql = "select * from Oorder";
    $result = $conn->query($sql);

$order_no = $result->num_rows +1;

$sql = "select * from cart";
    $result = $conn->query($sql);

    if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc()) 
        {
            $yes=1;
            $cid = $row['customer_id'];
            $restaurant_regno = $row['restaurant_regno'];
            $item_name = $row['item_name'];
            $quantity = $row['quantity'];

            
            /*echo $cid;
            echo $restaurant_regno;
            echo $item_name;
            echo $quantity;echo"<br>";*/

            $sql = "select customer_id,restaurant_regno,item_name,quantity from history";
            $result1 = $conn->query($sql);
            if($result1->num_rows>0)
            {
                while($row1 = $result1->fetch_assoc())
                {
                    
                    if($row1['customer_id']==$cid and $row1['restaurant_regno']==$restaurant_regno and $row1['item_name']==$item_name)
                    {
                        $yes=0;
                        $sql = "update history set quantity = quantity +'$quantity' where customer_id='$cid' and restaurant_regno='$restaurant_regno' and item_name='$item_name'";
                        $conn->query($sql);

                    }
                }
            }
            else
                $yes=1;

            if($yes==1)
            {
                $sql = "insert into history (customer_id,restaurant_regno,item_name,quantity) values('$cid','$restaurant_regno','$item_name','$quantity')";
                $conn->query($sql);

            }

                    if($row["item_name"]=='Roti')
                        $price =8;
                    if($row1["item_name"]=='Pizza')
                        $price =80;
                    if($row1["item_name"]=='Burger')
                        $price =60;
                    if($row1["item_name"]=='Biriyani')
                        $price =100;
                    if($row1["item_name"]=='Noodles')
                        $price =50;
                    if($row1["item_name"]=='Soup')
                        $price =40;
                    if($row1["item_name"]=='Paneer_Masala')
                        $price =40;
                    if($row1["item_name"]=='Chicken_Lamba')
                        $price =60;

            $sql = "insert into Oorder(order_no,item_name,quantity,price,restaurant_regno) values('$order_no', '$item_name','$quantity','$price','$restaurant_regno')";$conn->query($sql);

        }
    }


/*$sql = "delete from cart";
    $conn->query($sql);
*/















/*


if($roti!=0)
{
    $sql = "insert into Oorder (order_no,item_name,quantity,price) values('$size','Roti','$roti','8'  ";
    $result = $conn->query($sql);

}

if($pizza!=0)
{
    $sql = "insert into Oorder (order_no,item_name,quantity,price) values('$size','Pizza','$pizza','80'  ";
    $result = $conn->query($sql);

}
if($roti!=0)
{
    $sql = "insert into Oorder (order_no,item_name,quantity,price) values('$size','Roti','$roti','8'  ";
    $result = $conn->query($sql);

}
if($roti!=0)
{
    $sql = "insert into Oorder (order_no,item_name,quantity,price) values('$size','Roti','$roti','8'  ";
    $result = $conn->query($sql);

}
if($roti!=0)
{
    $sql = "insert into Oorder (order_no,item_name,quantity,price) values('$size','Roti','$roti','8'  ";
    $result = $conn->query($sql);

}
if($roti!=0)
{
    $sql = "insert into Oorder (order_no,item_name,quantity,price) values('$size','Roti','$roti','8'  ";
    $result = $conn->query($sql);

}
if($roti!=0)
{
    $sql = "insert into Oorder (order_no,item_name,quantity,price) values('$size','Roti','$roti','8'  ";
    $result = $conn->query($sql);

}
if($roti!=0)
{
    $sql = "insert into Oorder (order_no,item_name,quantity,price) values('$size','Roti','$roti','8'  ";
    $result = $conn->query($sql);

}







?>
*/               
?>
 </li>
                               
                            </ul>
                </div>

                

<?php
echo "<div style='float:left'><h1>YOUR ORDER HAS BEEN TAKEN <br>WE WILL GET BACK TO YOU SOON</h1></div>";

echo '<BR><BR><BR>';
echo "<div style='float:right;'><h1>TRACK YOUR ORDER <br></h1></div>";
echo'<br><BR>';


echo "<div style='float:left'>";
echo '<form method="post" action="gen_bill.php">';
   echo '<button type="submit" value="" name="billamount">GENERATE BILLS</button>';
    echo '</form>';
    echo'</div>';


    echo'<br><BR>';

echo "<div style='float:right'>";
echo '<form method="post" action="track1.php">';
   echo '<button type="submit" value="" name="billamount">TRACK</button>';
    echo '</form>';
    echo'</div>';


   ?> 



    


           </body>
</html>






