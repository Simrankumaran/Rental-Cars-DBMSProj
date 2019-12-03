<?php
session_start();
   include("config.php");
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form
   $name = $_POST['username'];
   $_SESSION['username']=$name;
   $lic=$_POST['Lic-id'];
   $add = $_POST['Address'];
   $phone = $_POST['phno'];
   $gen = $_POST['gender'];
   $pwd = $_POST['password'];
   $sql1="Insert into customer (Lic_id,name,address,phno,gender) values  (' $lic','$name','$add','$phone','$gen')";
   $sql2="Insert into users(username,password) values('$name','$pwd')";

   if(mysqli_query($db,$sql1) && mysqli_query($db,$sql2)){
     header("location:index2.php");
   }
}

?>
<html>
<head>
</head>
<body>
  <script>
    function Goto(){
      window.location.href="index2.php";
    }
  </script>
  <link rel="stylesheet" href="SignIn.css">
  <form  method="POST">
    <h1>Enter your personal details and start journey with us :)</h1>
    <input type="text" placeholder="Name" name="username" required />
    <input type="text" placeholder="Licence ID" name="Lic-id" required/>
    <input type="text" placeholder="Address" name="Address"required/>
    <input type="tel" placeholder="Phone number" name="phno" required/>
    <input type="text" placeholder="Gender" name="gender"required/>
    <input type="password" placeholder="Password" name="password" required />
    <button onclick="Goto()">Sign Up</button>
  </form>
</body>
</html>
