<?php 
include 'connection.php';
?>
        <table  border="">		
           <tr bgcolor="">
            <th>PHONE NUMBER </th>
            <th>CLOCK OUT TIME </th>
            <th>DATE</th>
			
			
            </tr>
            <?php
			//email, fname, onames, sex, state, region, uniattend, jobs, curjob, skills, quali, dob
            $query="SELECT * FROM cllockout";
            $result=  mysqli_query($conn,$query);
            while /*($row= mysqli_fetch_array($result)&&*/
			($row = mysqli_fetch_array($result)){  
            ?>
            <tr bgcolor="">      
                <td><?php echo $row["phno"];?></td>
				<td><?php echo $row["time"];?></td>
                <td><?php echo $row["date"];?></td>
                
            </tr>
			 <?php 
			}
			 ?>
		 </table>