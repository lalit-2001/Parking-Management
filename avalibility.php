<?php error_reporting(null);?>

<?php
session_start();
include"dbconnection.php";
if(isset($_POST['submit']))
{
	$a=$_POST['park_name'];
	
	$sql="select * from parking where park_name='$a'";
	$r=pg_query($con,$sql);
      $row=pg_fetch_row($r);


}
?>

<html>
<head>
<title><font color=red>
PARKING AVAILIBILITY</font>
</title><link rel="Stylesheet" href="css/style.css"></link>
</head>
<body>
<div class="container">
<div class ="header">
<p>
<h2><font size=15 color=red>ONLINE PARKING MANAGEMENT SYSTEM</font></h2></p></div>
<div class="navbar">
<ul class="menu">

<li><a href="login.php">Login</a></li>
<li><a href="about.php" >About</a></li>
<li><a href="contact.php" >Contact</a></li>

</ul>
</div>
<div class="maincontent">
<form action="avalibility.php"method="post">
<div class="main">
<table align="center" cellpadding="10">
<h2><font size=5 color=red>PARKING AVAILIBILITY</font></h2>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label for><font size=3 color=red><b>SELECT PARKING NAME:</b></lable></font></td>
<td>
<SELECT name=park_name>
<OPTION value= "-1" selected>Select:</OPTION>
<OPTION value="vijay parking">VIJAY PARKING </OPTION>
<OPTION value="SHINE VALID PARKING">SHINE VALID PARKING</OPTION>
<OPTION value="VALET PARKING">VALET PARKING</OPTION>
<OPTION value="NATIONAL AUTO PARKING">NATIONAL AUTO PARKING</OPTION>
<OPTION value="JVM PARKING">JVM PARKING</OPTION>
<OPTION value="FIVE ELEMENTS PARKING">FIVE ELEMENTS PARKING</OPTION>
</SELECT></td></tr><br><br>





<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Display">
</td></tr>
<tr>
   <td><b><font color=red> Total Spaces :</b> <?php echo $row[2];?></font></td>
   <td> <b><font color=red>Free Spaces : </b><?php echo $row[3]; ?></font></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="vehicle.php">NEXT</a>
</td></tr>
</table></div>
</form>
</body>
</html>






