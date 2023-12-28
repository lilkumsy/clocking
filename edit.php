<?php

include 'connection.php';
if(isset($_POST['submit'])){
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$adess=$_POST['ades'];
$role=$_POST['role'];

if( !empty($firstname) && !empty($lastname)  && !empty($gender)  && !empty($email)  && !empty($phno)&&
   !empty($adess)){
		 $updat = mysqli_query($conn, "UPDATE staff_record SET  firstname='$firstname',lastname='$lastname',gender='$gender',email='$email',
								phno='$phno',adesignation='$adess',role='$role'");
                           
	if($updat){
echo "update successful";	
}
else{
	echo "unsucessful update, try again".mysqli_error($conn);
}
}
}
?>
<form method="post"> 
<table>
<tr>
<tr>
<td>FIRST NAME </td>
<td><input type="text" name="fname"  ></td>
</tr><tr>
<td> LAST NAME</td>
<td><input type="text" name="lname" ></td>
</tr><tr>
<td>GENDER</td>
<td><input type="text" name="gender" ></td>
</tr><tr>
<td>EMAIL</td>
<td><input type="text" name="email"  ></td>
</tr><tr>
<td>PHONE NUMBER</td>
<td><input type="text" name="phno"  ></td>
</tr>
    <tr>
<td>ADDRESS AND DESIGNATIONSS</td>
<td><input type="text" name="ades" ></td>
</tr>
    <tr>
<td>ROLE</td>
<td><input type="text" name="role" ></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit"  value="Update Staff Records" ></td>
</tr>
</table>
</form>