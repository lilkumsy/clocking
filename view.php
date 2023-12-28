<?php 
include 'connection.php';
?>
        <table  border="">		
           <tr bgcolor="">
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>GENDER</th>
			<th>EMAIL</th>
			<th>PHONE NUMBER</th>
			<th>ADDRESS AND DESIGNATION</th>
			<th>ROLE</th>
			
            </tr>
            <?php
			//email, fname, onames, sex, state, region, uniattend, jobs, curjob, skills, quali, dob
            $query="SELECT * FROM staff_record";
            $result=  mysqli_query($conn,$query);
            while /*($row= mysqli_fetch_array($result)&&*/
			($row = mysqli_fetch_array($result)){  
            ?>
            <tr bgcolor="">      
                <td><?php echo $row["firstname"];?></td>
				<td><?php echo $row["lastname"];?></td>
                <td><?php echo $row["gender"];?></td>
                <td><?php echo $row["email"];  ?></td>
				<td><?php echo $row["phno"]; ?></td> 
				<td><?php echo $row["adesignation"];?></td>
				<td><?php echo $row["role"];?></td>
            </tr>
			 <?php 
			}
			 ?>
		 </table>