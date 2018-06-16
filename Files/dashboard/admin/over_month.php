<?php
require '../../include/db_conn.php';
$month=$_GET['mm'];
$year=$_GET['yy'];

$query="select * from users u INNER JOIN address a on u.userid=a.id where u.joining_date like '".$year."-".$month."___'";

  

$res=mysqli_query($con,$query);
echo "<tbody>";

$sno    = 1;

if (mysqli_affected_rows($con) != 0) {

	echo "<thead>
				<tr><h2>
					<th>Sl.No</th>
					<th>Member ID</th>
					<th>Name</th>
					<th>Contact</th>
					<th>E-Mail</th>
					<th>Gender</th>
					<th>State</th>
					<th>City</th>
					<th>DOB</th>
					<th>Joining_Date</th>
					</h2>
				</tr>
	</thead>";

    while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
      

                echo "<tr><td>".$sno."</td>";
                
                echo "<td>" . $row['userid'] . "</td>";

                echo "<td>" . $row['username'] . "</td>";

                echo "<td>" . $row['mobile'] . "</td>";

                echo "<td>" . $row['email'] . "</td>";

                echo "<td>" . $row['gender'] . "</td>";

                echo "<td>" . $row['state'] . "</td>";

                echo "<td>" . $row['city'] . "</td>";

                echo "<td>" . $row['dob'] . "</td>";

                echo "<td>" . $row['joining_date'] ."</td></tr>";
                
                $sno++;
            
        
    }

}
else{
	echo "<h2>No Data found On ".$year."-".$month."</h2";
}
echo "</tbody>";


?>