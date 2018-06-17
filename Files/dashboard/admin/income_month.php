<?php
require '../../include/db_conn.php';
$month=$_GET['mm'];
$year=$_GET['yy'];

$query="select DISTINCT u.userid,u.username,u.gender,u.mobile,
u.email,u.joining_date,a.state,a.city,
e.paid_date,e.expire,p.planName,p.amount,p.validity from users u 
INNER JOIN address a on u.userid=a.id 
INNER JOIN enrolls_to e on u.userid=e.uid
INNER JOIN plan p on p.pid=e.pid
where e.paid_date  like '".$year."-".$month."___'";
  

$res=mysqli_query($con,$query);
echo "<tbody>";

$sno    = 1;
$totalamount=0;
if (mysqli_affected_rows($con) != 0) {

	echo "<thead>
				<tr>
					<th>Sl.No</th>
					<th>Member ID</th>
					<th>Name</th>
					<th>Contact</th>
					<th>Gender</th>
					<th>State</th>
					<th>Paid_Date</th>
					<th>Expire_Date</th>
					<th>Plan_Name</th>
					<th>Amount</th>
					<th>Validity</th>
				</tr>
	</thead>";

    while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
      

                echo "<tr><td>".$sno."</td>";
                
                echo "<td>" . $row['userid'] . "</td>";

                echo "<td>" . $row['username'] . "</td>";

                echo "<td>" . $row['mobile'] . "</td>";


                echo "<td>" . $row['gender'] . "</td>";

                echo "<td>" . $row['state'] . "</td>";

                echo "<td>" . $row['paid_date'] . "</td>";

                echo "<td>" . $row['expire'] . "</td>";

                echo "<td>" . $row['planName'] . "</td>";

                echo "<td>" . $row['amount'] . "</td>";

                echo "<td>" . $row['validity'] . " Month</td>";
                
                $totalamount=$totalamount+$row['amount'];
                $sno++;
            
        
    }

 	$monthName = date("F", mktime(0, 0, 0, $month, 10));

    echo "<tr><td colspan=11 align='center'><h3>Total Income on ".$monthName." is ₹".$totalamount."</h3></td></tr>";

}
else{
		$monthName = date("F", mktime(0, 0, 0, $month, 10));
		echo "<h2>No Data found On ".$monthName." ".$year."</h2";
}
echo "</tbody>";


?>
