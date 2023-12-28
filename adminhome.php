<?php
include 'connection.php';
session_start();
?>
<body>
<div style="float:top; height:90px;width:100%;background:black;">
    <h1 style="text-align:center;">
<a href="index.html" style="color:white;text-decoration:none;">Home|</a>
<a href="insert.php" style="color:white;text-decoration:none;">Add Staff|</a>
<a href="delete.php" style="color:white;text-decoration:none;">Delete Staff Record|</a>
<a href="edit.php" style="color:white;text-decoration:none;">Update Staff Record|</a>
<a href="view.php" style="color:white;text-decoration:none;">View Staff|</a>
<a href="vclockin.php" style="color:white;text-decoration:none;">View Clock In|</a>
<a href="vclockout.php" style="color:white;text-decoration:none;">view Clock Out|</a>
<a href="logout.php" style="color:white;text-decoration:none;">Log-Out|</a>
    </h1>
</div>
<?php

if($_SESSION["phno"] && $_SESSION["email"] && $_SESSION["firstname"] && $_SESSION["lastname"]&& $_SESSION["gender"]&& $_SESSION["adesignation"]
&& $_SESSION["role"]&& $_SESSION["staffid"]) {
?>
<br>
<h3 style="text-align: center;">Hello, and welcome to admin dashboard,below are your details.</h3>
<h1 style='text-align:center;'>Admin Profile</h1>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<center><table>
<tr>
    <td>First Name</td>
    <td><?php echo $_SESSION["firstname"]; ?></td>
</tr>
<tr>
    <td>Last name</td>
    <td><?php echo $_SESSION["lastname"]; ?></td>
</tr>
<tr>
    <td>Gender</td>
    <td><?php  echo $_SESSION["gender"];?></td>
</tr>
<tr>
    <td>address</td>
    <td><?php echo $_SESSION["adesignation"]; ?></td>
</tr>
<tr>
    <td>role</td>
    <td><?php  echo $_SESSION["role"];?></td>
</tr>
<tr>
    <td>email</td>
    <td><?php  echo $_SESSION["email"];?></td>
</tr>
<tr>
    <td>Staff Id</td>
    <td><?php  echo $_SESSION["staffid"];?></td>
</tr>
</table></center>
<h2 style="text-align:center;">All Rights Reserved.Powered by Ayua Kuma Simon-<?php echo date("Y");?></h2>
<?php
}else echo "<h1>Please login first .</h1>";

?>
