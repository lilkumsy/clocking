<?php
include 'connection.php';
if(isset($_POST['submit'])){
$phno=$_POST['phno'];
$date=date("Y/m/d");
$time=date("h:i:sa");

if( !empty($phno) && !empty($date)  && !empty($time)){	

		$query="insert into cllockout values('$phno','$date','$time')";
		$result=mysqli_query($conn,$query);
		if($result){
			echo "<script>alert('staff clocked in  successfullys')</script>";
		}else{
			echo "staff clockin not successful".mysqli_error($conn);
	}
}
else{
	echo "enter required fields";
	}
}
?>

<div style="float:top; height:40px;width:100%;background:black;">
<h1 style="text-align:center;"> <a href="index.php" style="color:white;text-decoration:none;">Home</a>|
<a href="insert.php" style="color:white;text-decoration:none;">Register</a>|
<a href="clockin.php" style="color:white;text-decoration:none;">Clock-In </a>|
<a href="clockout.php" style="color:white;text-decoration:none;">Clock-Out</a>|
<a href="login.php" style="color:white;text-decoration:none;">Login </a></h1></div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<center><h1>Staff Clock-Out</h1></center>
<form method='post' >
<center><table>
<tr>
<tr>
<td>PHONE NUMBER </td>
<td><input type="text" name="phno" maxlength="50"required /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit"  value="CLOCK OUT" maxlength="50"required /></td>
</tr>
</table></center>
</form>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<h1 style="text-align:center;">All rights reserved.powered by Ayua Kuma Simon-<?php echo date("Y");?></h1>