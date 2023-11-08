<?php
include"dbconnection.php";
$message="";
       if(isset($_POST['submit']))
	{
//                 $c_id=$_POST['c_id'];
		$c_name=$_POST['c_name'];
		$email_id=$_POST['email_id'];
		$mobile_no=$_POST['mobile_no'];
		$password=$_POST['password'];
		$re_entered=$_POST['re_entered'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];

	echo $p="insert into customer(c_name,email_id,mobile_no,password,re_entered,dob,gender)values('$c_name','$email_id',
'$mobile_no','$password','$re_entered','$dob','$gender')";
		$result=mysqli_query($con,$p);
		if($result>0)
{
 echo"<script>alert('you have successfully registred')</script>";
}
else
{
 echo"<script>alert('you have unsuccessfully registred')</script>";
}
}
?>



<html>
<head>
<title>
REGISTRATION FORM
</title><link rel="Stylesheet" href=""></link>
<style>

*{ 
    background-size:cover;
    background-image: url('registration.png');  
}
ul{   
color: green;
display:flex;
margin:20px;
border-spacing:2px;
justify-content:space-evenly;

}
a {
    
    color:black;
    border: 0.5px solid green;
}
    </style>
</head>
<body>
<div class="container">
<div class ="header">
<p>
<h2>ONLINE PAY AND PARKING</h2></p></div>
<div class="navbar">
<ul class="menu">
<a ref="">Home</a>
<a ref="">About</a>
<a ref="">Contact</a></ul>
</div>
<div class="maincontent">
<form action="registration.php"method="post">
<div class="main">
<table align="center" cellpadding="5">
<h2><font color=red>Registration Form</font></h2>
<tr>
<td><font color=red>Customer name:</td><td><input type="text" name ="c_name"></td></tr><br><br>
<tr><td><font color=red>Email-ID :</td><td><input type="text" name="email_id" ></td></tr><br><br>
<tr><td> <font color=red>Phone Number:</td><td><input type="text" name="mobile_no" ></td></tr><br><br>


<tr><td><font color=red>Password:</td><td><input type="password" name="password"></td></tr><br><br>
<tr><td><font color=red>Re-enter password:</td><td><input type="password" name="re_entered"><td></tr><br><br>
<tr><td><font color=red>Date of Birth:</td><td><input type="date" name="dob"></td></tr><br>


<tr><td><font color=red>Gender:</td><td><input type="radio" name="gender" value="male" checked><font color=red>Male</td><td>
<input type="radio" name="gender" value="female"><font color=red>Female</td></tr><br><br>
<tr><td colspan="3" align="center"><input
 type ="submit" name="submit" value="submit">
<input type ="reset" name="reset" value="reset"><br><br>
<tr><td colspan="3" align="left"><a href="login.php">SIGN UP</a></td></tr>
</table></div>
<div class="sidebar"></div>
<div class="footer"></div>
</form>
</body>
</html>
