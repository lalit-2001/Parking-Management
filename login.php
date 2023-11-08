<html>
<head>
<title>Log In</title>
<link rel="stylesheet" type="text/css" href="css/login1.css">
<style>
ul{ 
color: green;
display: flex;
justify-content:space-evenly;

}
*{ 
    background-size:cover;
    background-image: url('registration.png');  
}
a {
    
    color:black;
    border: 0.5px solid green;
}
    </style>
</head>
<body>
<div class="main">		
<ul>
 <a href="index.php">Home</a>
 <a href="about.php" >About</a>
 <a href="contact.php" >Contact</a>
</ul>		
	</div>
<script>  
    function validateform(){  
    
var x = document.getElementById("myEmail").pattern;
  document.getElementById("demo").innerHTML = x;
	alert("enter correct email");
    }  
    </script> 

<div class="box">
<h4>

<center>
<div class="login">
<img src="icon.png">
</div>
<h3>Sign In With User Name</h3>
<br>
<form name="myform" method="post" action="login.php" onsubmit="return validateform()" >  

USERNAME
<br>
<input type="email" id="myEmail" name="username" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="enter Email Id">

<br><br>
PASSWORD
<br>
<input type="password" name="password" placeholder="password" required>
<br><br>
<input type="submit" name="submit" value="LogIn">
<br>
<br>OR

<h3>Does not have account?<br><a href="registration.php">sign up now</a></h3> 

</form>
</center>
</h4>
</div>
</body>
</html>

<?php

session_start();
include"dbconnection.php";
$message="";
if(isset($_POST['submit']))
{
$a=$_POST['username'];
$p=$_POST['password'];
$sql="select * from customer where email_id='$a' and password='$p'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
$_SESSION['username']=$a;

header('location:book1.php');
}
 else
{
$message="invalid id or password";
}
}
// setcookie('email',$_POST['username']);

// /*
?>





