<?php
session_start();
include('config.php');
$na=$_SESSION['username'];
$l=$_SESSION['lic'];
echo $na;
$sql1="select * from bill where Lic_id='$l'";
$res=mysqli_query($db,$sql1);
//echo $res;
if(mysqli_query($db,$sql1)) {
    echo "hey";
    while($row=mysqli_fetch_assoc($res)){
      $pice=$row['price'];
      echo $pice;
      $cno=$row['car_no'];
      echo $cno;
      $dest=$row['destination'];
      echo $dest;      
      $date1=$row['Date'];
      echo $date1;
    }
}
else{
  //echo "fail";     <link rel="stylesheet" href="index.css">
}
?>

<html>
<head>

      <style>
     .p{
       justify-content: center;
       align-items: center;
       text-align:center;
     }
     .h1{
       text-align: center;
       color:white;
     }
   div{
        color:black;
   }

     ul {
     list-style-type: none;
     margin: 0;
     padding: 0;
     overflow: hidden;
     background-color: #333;
   }

   li {
     float: left;
   }

   li a {
     display: block;
     color: white;
     text-align: center;
     font-family: cursive;
     padding: 20px 50px;
     text-decoration: none;
   }

   li a:hover {
     background-color: white;
     color:black;
   }
  </style>
</head>
<body>
  <div>
  <h1 style="color:white" style="font-family:cursive" style="bold">
  Car-Rentals.Bangalore.com
  <hr>
</h1>
<ul>
<li><a href="index2.php">Home</a></li>
<li><a href="calcbill.php">Book Now</a></li>
<li><a href="ChooseLoc.php">Location</a></li>
<li><a href="active">My Bookings</a></li>
<li><a href="index.html">SignOut</a></li>
</ul>
<hr>
  <div class="order">
        <h1>YOUR ORDER</h1>
    <p><h3><b>Car Number:         </b><?php echo $cno; ?></h3></p>
    <p><h3><b>Destination: </b> <?php echo $dest; ?></h3></p>
    <p><h3><b>Date:        </b><?php echo $date1; ?></h3></p>
    <p><h3><b>Amount:      </b>Rs.<?php echo $pice; ?></h3></p>
</div>
</div>
</body>
</html>
