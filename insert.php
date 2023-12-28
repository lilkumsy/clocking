<?php
include 'connection.php';
if(isset($_POST['submit'])){
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$gender=$_POST['genderr'];
$email=$_POST['emaill'];
$phneoo=$_POST['phno'];
$adess=$_POST['ades'];
$role="staff";
$staffid=$_POST['emaill'];
$target_dir='uploads/';
$target_file=$target_dir.basename($_files['pic']['name']);
$pic=1;
if( !empty($firstname) && !empty($lastname)  && !empty($gender)  && !empty($email)  && !empty($phneoo)
	&& !empty($adess)){	

		$query="insert into staff_record values('$firstname','$lastname','$gender','$email','$phneoo','$adess','$role')";
		$result=mysqli_query($conn,$query);
		if($result){
			echo "<script>alert('staff record added successfullys')</script>";
		}else{
			echo "cannot add staff record".mysqli_error($conn);
	}
}
else{
	echo "enter required fields";
	}
}
?>
<body>
<div style="float:top; height:40px;width:100%;background:black;">
<h1 style="text-align:center;"> <a href="index.php" style="color:white;text-decoration:none;">Home</a>|
<a href="insert.php" style="color:white;text-decoration:none;">Register</a>|
<a href="clockin.php" style="color:white;text-decoration:none;">Clock-In </a>|
<a href="clockout.php" style="color:white;text-decoration:none;">Clock-Out</a>|
<a href="login.php" style="color:white;text-decoration:none;">Login </a></h1></div>
<h1 style="text-align:center;">Staff Signup </h1>
<form method='post' action='' enctype='multipart/form-data'>
<br/><br/><br/><br/><br/><br/><br/>
<center>
	<table>
<tr>
<tr>
<td>FIRST NAME </td>
<td><input type="text" name="fname" maxlength="50"required /></td>
</tr><tr>
<td>LAST NAME</td>
<td><input type="text" name="lname" maxlength="50"required /></td>
</tr><tr>
<td>GENDER</td>
<td><input type="text" name="genderr" maxlength="50"required /></td>
</tr><tr>
<td>EMAIL</td>
<td><input type="text" name="emaill" maxlength="50"required /></td>
</tr><tr>
<td>PHONE NUMBER</td>
<td><input type="text" name="phno" maxlength="50"required /></td>
</tr>
<tr>
<td>ADDRESS AND DESIGNATION</td>
<td><input type="text" name="ades" maxlength="50"required /></td>
</tr>
<tr>
<td>SELECT PASSPORT PICTURE TO UPLOAD</td>
<td><input type="file" name="pic" required /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit"  value="SIGNUP" maxlength="50"required /></td>
</tr>
</table></center>
</form>
<br/><br/><br/><br/><br/>
<h1 style="text-align:center;">All rights reserved.powered by Ayua Kuma Simon-<?php echo date("Y");?></h1>
</body>

