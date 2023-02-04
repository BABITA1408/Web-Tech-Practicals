<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "csc_dept";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM STUDENT";
	$result = $conn->query($sql);
	$i = 1;
	
	if ($result->num_rows > 0) {
	  // output data of each row
		echo '<table align="center" cellspacing="2" cellpadding="10" border="2" bordercolor="blue">
			<tr>
			   <td align="Center"><b>Sl No.</b></td>
			   <td align="Center"><b>Roll No</b></td>
			   <td align="Center"><b>Name</b></td>
			   <td align="Center"><b>Year</b></td>
			   <td align="Center"><b>Mark</b></td>
			</tr> ';
		  
		while($row = $result->fetch_assoc()) {
			echo '<tr>
				   <td align="Center"><b>'.$i.'</b></td>
				   <td align="Center"><b>'.$row['rollno'].'</b></td>
				   <td align="left"><b>'.$row['name'].'</b></td>
				   <td align="Center"><b>'.$row['year'].'</b></td>
				   <td align="Center"><b>'.$row['mark'].'</b></td>
				</tr>
			'; 
			
			$i++;
		}
		echo '</table>';
	} else {
		echo "0 results";
	}
	$conn->close();
?>