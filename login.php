
<?php
session_start();
include 'connection.php';
$roleA="admin";
$roleB="staff";
if(isset($_POST['submit'])){
$email=$_POST['email'];
$phno=$_POST['phno'];
$query="select * from staff_record  where phno='".$phno."' && email='".$email."'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)==1){
$_SESSION['role']=$row['role'];
$role=$row['role'];
   if($role=='admin'){
		$_SESSION['role']=$role;
		$_SESSION['loggedin']='yes';
		$_SESSION['phno']=$phno;
		$_SESSION['email']=$email;
		$_SESSION['firstname']=$row["firstname"];
		$_SESSION['lastname']=$row["lastname"];
		$_SESSION['gender']=$row["gender"];
		$_SESSION['adesignation']=$row["adesignation"];
		$_SESSION['role']=$row["role"];
		$_SESSION['staffid']=$row["staffid"];
        header('Location:adminhome/adminhome.php');
	exit;      
}
else{
	if($role=='staff'){
        $_SESSION['role']=$role;
		$_SESSION['loggedin']='yes';
		$_SESSION['phno']=$phno;
		$_SESSION['email']=$email;
		$_SESSION['firstname']=$row["firstname"];
		$_SESSION['lastname']=$row["lastname"];
		$_SESSION['gender']=$row["gender"];
		$_SESSION['adesignation']=$row["adesignation"];
		$_SESSION['role']=$row["role"];
		$_SESSION['staffid']=$row["staffid"];
   		header('Location:staffhome/staffhome.php');
		exit;
}
}
}
}
?>
<body>
<div style="float:top; height:40px;width:100%;background:black;">
<h1 style="text-align:center;"> <a href="index.php" style="color:white;text-decoration:none;">Home</a>|
<a href="insert.php" style="color:white;text-decoration:none;">Register</a>|
<a href="clockin.php" style="color:white;text-decoration:none;">Clock-In </a>|
<a href="clockout.php" style="color:white;text-decoration:none;">Clock-Out</a>|
<a href="login.php" style="color:white;text-decoration:none;">Login </a></h1></div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<h1 style="text-align:center;">Staff Login</h1>
<form method='post' >
<center><table>
<tr>
<td >PHONE NUMBER </td>
<td><input type="text" name="phno" required /></td>
</tr>
<tr>
<td ><label class="lab">EMAIL</td>
<td><input type="password" name="email" required /></td>
</tr>
<tr>
<td></td>
<td ><input type="submit" name="submit" value="LOGIN" ></td>
</tr>
</table></center>
</form>
<br/><br/><br/><br/><br/><br/><br/><br/>
<h1 style="text-align:center;">All rights reserved.powered by Ayua Kuma Simon-<?php echo date("Y");?></h1>
</body>


