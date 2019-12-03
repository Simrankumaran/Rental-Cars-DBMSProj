<?php
session_start();
include('config.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $dest=$_POST['dest'];
  $_SESSION['destination'] = $dest;
  echo $dest;
}
//$_SESSION['price']=$price;
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
button {
  border-radius: 10px;
  border:  white;
  background-color:black;
  color:white;
  font-size: 15px;
  font-weight: bold;
  font-family:inherit;
  padding: 20px 50px;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

input {
  background-color:black;
  border-color: white;
  padding: 12px 15px;
  color:white;
  margin: 8px 0;
  width: 30%;
}
</style>
</head>
<body>
  <script>
   function submit(){
     alert("Location set");
   }
  </script>
  <div>
    <h1 style="color:white" style="font-family:cursive" style="bold">
    Car-Rentals.Bangalore.com
    <hr>
  </h1>
  <ul>
  <li><a href="index2.php">Home</a></li>
  <li><a href="calcbill.php">Book Now</a></li>
  <li><a href="ChooseLoc.php">Location</a></li>
  <li><a href="Bill.php">My Bookings</a></li>
  <li><a href="index.html">SignOut</a></li>
  </ul>
  <hr>
</div>
<div class="container" id="location">
  <h1 style="color:white" style="font-family:cursive"><i>Choose your destination</i></h1>
  <button>Mysore</button>
  <button>Chennai</button>
  <button>Coimbatore</button>
  </div>
  <div><form action="#" method="post">
    <input type="text" placeholder="Destination" name="dest" required/>
    <br>
    <button type="submit" onclick="submit()">SUBMIT</button>
  </div></form>
</body>
</html>
