<?php
   session_start();
   include("config.php");
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
      $myusername = $_POST['username'];
      $_SESSION['username']=$myusername;
      $mypassword = $_POST['password'];
      $sql = "SELECT username FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         header('location:index2.php');
      }else {
         echo "<script type='text/javascript'>alert('Your Login Name or Password is invalid');</script>";
      }
   }
   //
   ?>
<html>
	<body>
    <link rel="stylesheet" href="SignIn.css">
    <script>
    function Goto(){
      window.location.href="SignUP.php";
    }
    </script>

		<h2>LOGIN</h2>
<div class="container" id="container">
		<div class="form-container sign-in-container">
		<form action="#" method="POST" name="Sign In">
			<h1>Welcome Back!</h1>
			<input type="username" placeholder="Username" name="username" />
			<input type="password" placeholder="Password" name="password"/>
			<button><h3>Sign In</h3></button></form>
        </div>
        <div style="text-align:center">
          <button onclick="Goto()"><h3>Sign Up</h3></button>
        </div>
	  </div>
  </body>
</html>
