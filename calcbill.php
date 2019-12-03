<?php
session_start();
include('config.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $lic=$_POST['lic'];
  $_SESSION['lic']=$lic;
  $cn=$_POST['cname'];
  $date=$_POST['date'];
  $sql="select * from car where car_name='$cn' ";
  $res=mysqli_query($db,$sql);
  if(mysqli_query($db,$sql)){
    if(mysqli_num_rows($res)){
       while($row = mysqli_fetch_assoc($res)){
    $carno= $row['car_no'];
    $catid=$row['Cat_id'];
  }
}
}
  $d=$_SESSION['destination'];
  $sql1="select * from amount where cat_id='$catid' AND destination='$d' ";
  if(mysqli_query($db,$sql1)) {
    echo "done ONE";

  }
  else{
    echo "fail";
  }
  $res=mysqli_query($db,$sql1);
if(mysqli_query($db,$sql1)){
  if(mysqli_num_rows($res)){
    while($row=mysqli_fetch_assoc($res)){
      echo "Price is working";
      $pr=$row['price'];
      }
  }
}

  $stat="booked";
  $sql2="Insert into ride(Date,status,car_no) values('$date','$stat','$carno')";
  if(mysqli_query($db,$sql2)) {
    echo "done";
  }
  else{
    echo "fail";
  }
  $sql3="Insert into bill (Lic_id,price,car_no,cat_id,destination,Date) values ('$lic','$pr','$carno','$catid','$d','$date')";
  if(mysqli_query($db,$sql3)) {
    echo "done";
  }
  else{
    echo "fail";
  }
  /*if(mysqli_query($db,$sql1)) {
    echo "done";
  }
  else{
    echo "fail";
  }
  */

}
//<link rel="stylesheet" href="index.css">
?>
<html>
<head>

  <style>
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
    <div class="container">
  <h1 style="color:white" style="font-family:cursive" style="bold">
  Car-Rentals.Bangalore.com
  <hr>
</h1>
<ul>
<li><a class="index2.php">Home</a></li>
<li><a href="active">Book Now</a></li>
<li><a href="ChooseLoc.php">Location</a></li>
<li><a href="Bill.php">My Bookings</a></li>
<li><a href="index.html">SignOut</a></li>
</ul>
<hr>

      <!--BOOK NOW-->
          <div class="container">
            <h5><i style="color:white">BOOK NOW</i></h5>
            <form method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="lic" placeholder="Licence ID" required></input>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="cname" placeholder="Car Name" required></input>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="date" placeholder="Date yy/mm/dd" required></input>
              </div>
              <div class="form-group">
                <button type="submit" onclick="submit()">Booknow</button>
              </div>
                </form>


          </div>
      <!--BOOK NOW-->
    </body>
    </html>
