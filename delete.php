<?php 
include 'connection.php';
if(isset($_POST['submit'])){
$phno=$_POST['phno'];
$del=mysqli_query($conn,"DELETE FROM staff_record WHERE phno ='$phno'");
if($del){
echo "records removed successful";	
}
else{
	echo "unsucessful removal of records, try again".mysqli_error($conn);
}
}
?>
<form method="post">
<table>
<tr>
<td>STAFF PHONE NUMBER </td>
<td><input type="text" name="phno"  ></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit"  value="REMOVE RECORD"></td>
</tr>
</table>
</form>