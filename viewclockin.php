<?php 
include 'connection.php';
session_start();
?>
<html>
    <head>
        <title>Staff Home</title>
    </head>
<body>
<div style="float:top; height:50px;width:100%;background:black;">
     <h1 style="text-align:center;"> 
<a href="staffhome.php" style="color:white;text-decoration:none;">Home</a>|
<a href="viewmyAttendance.php" style="color:white;text-decoration:none;">View Clock-in</a>|
<a href="viewclockin.php" style="color:white;text-decoration:none;">View Clock-out</a>|
<a href="search.php" style="color:white;text-decoration:none;">Search Clock-in</a>|
<a href="logout.php" style="color:white;text-decoration:none;">Logout </a>
    </h1></center>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/>

        <center><table border='1'>		
           <tr>
            <th>PHONE NUMBER </th>
            <th>CLOCK IN TIME </th>
            <th>DATE</th> 
            </tr>
            <?php
            if($_SESSION["phno"]) {
			//email, fname, onames, sex, state, region, uniattend, jobs, curjob, skills, quali, dob
            $query="select * from cllockout where phno='".$_SESSION["phno"]."'";
            $result=  mysqli_query($conn,$query);
            while /*($row= mysqli_fetch_array($result)&&*/
			($row = mysqli_fetch_array($result)){  
            ?>
            <tr>      
                <td><?php echo $row["phno"];?></td>
				<td><?php echo $row["time"];?></td>
                <td><?php echo $row["date"];?></td>     
            </tr>
			 <?php 
			}
        }
			 ?>
		 </table></center>
         <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
         <br/><br/><br/>
         <h2 style="text-align:center;">All Rights Reserved.Powered by Ayua Kuma Simon-<?php echo date("Y");?></h2>
         </body>
</html>