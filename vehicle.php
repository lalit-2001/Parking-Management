<html>
<head>
<title>ONLINE PAY AND PARK MANAGEMENY SYSTEM</title>
<link rel="stylesheet" type="text/css" href="">
<style>
ul{ 
color: green;
display: flex;
justify-content:space-evenly;

}
    </style>
</head>
<body>
	<ul>
<li><a href="index.php">Home</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="about.php" >About</a></li>
<li><a href="contact.php" >Contact</a></li>
<li><a href="admin.php" >Admin</a></li>






<form action="vehicle.php" method="POST">

<table align="center" cellpadding="5">
<h2><font color=red>SELECT CITY AND AREA</h2>

<tr><td><font color=red>Vehicle No:</td><td><input type="text"name="v_no"></td></tr><br><br>
 <tr><td><font color=red>Vehicle Type:</td><td><input type="radio" name="v_type" value="Two Wheeler" checked><font color=red>Two Wheeler</td><td>
<input type="radio" name="v_type" value="Four Wheeler"><font color=red>Four Wheeler</td></tr><br><br>
 <tr><td><font color=red>No Of Hours:</td><td><input type="text" name="no_of_hrs"></td></tr><br><br>
<tr><td><font color=red>Date of Park:</td><td><input type="date" name="date"></td></font></tr><br>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="OK"></td></tr><br><br>
<tr><td align="right" cellpadding="5"><input type="submit" name="btn" value="LOGOUT"></td></tr><br><br>
</table>
 
</form>
</body>.
</html>

<?php
include"dbconnection.php";
$message="";
       if(isset($_POST['submit']))
	{
		$v_no=$_POST['v_no'];
		$v_type=$_POST['v_type'];
		$no_of_hrs=$_POST['no_of_hrs'];		
		$date=$_POST['date'];
	echo $p="insert into vehicle(v_no,v_type,no_of_hrs,date) values('$v_no','$v_type','$no_of_hrs','$date')";
		$result=mysqli_query($con,$p);
		if($result>0)
{ 
echo"<script>alert('you have successfully registred')</script>";	//header('location:lo.php');
}
else
{
		 echo"<script>alert('you have unsuccessfully registred')</script>";
}

}

if(isset($_POST['btn']))
{
		header('location:lo.php');
		
		
	}
?>
