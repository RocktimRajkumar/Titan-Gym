<?php
require '../../include/db_conn.php';
page_protect();

if (isset($_POST['name'])) {
    $memid = $_POST['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Titan Gym | Edit Member</title>
    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" rel="stylesheet" type="text/css">
	
	<style>
 	#button1
	{
	width:126px;
	}

	.page-container .sidebar-menu #main-menu li#hassubopen > a {
	background-color: #2b303a;
	color: #ffffff;
	}

	</style>

</head>
    <body class="page-body  page-fade" onload="collapseSidebar()">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="main.php">
					<img src="../../images/logo.png" alt="" width="192" height="80" />
				</a>
			</div>
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
		
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	

					</div>
				
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">


							<li>Welcome <?php echo $_SESSION['full_name']; ?> 
							</li>							
						
							<li>
								<a href="logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
					</div>
			</div>

		<h3>Edit Member Details</h3>

		<hr />

			<form action="edit_member.php" method="POST" >

				<?php
	    
				    $query  = "SELECT * FROM users u 
				    		   INNER JOIN address a ON u.userid=a.id
				    		   INNER JOIN  health_status h ON u.userid=h.uid
				    		   INNER JOIN enrolls_to e on u.userid=e.uid
				    		   INNER JOIN plan p on e.pid=p.pid
				    		   WHERE userid='$memid' and e.renewal='yes'";
				    //echo $query;
				    $result = mysqli_query($con, $query);
				    $sno    = 1;
				    
				    $name="";
				    $gender="";

				    if (mysqli_affected_rows($con) == 1) {
				        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				    
				            $name    = $row['username'];
				            $gender =$row['gender'];
				            $mobile = $row['mobile'];
				            $email   = $row['email'];
				            $dob	 = $row['dob'];         
				            $jdate    = $row['joining_date'];
				          	$streetname=$row['streetName'];
				          	$state=$row['state'];
				          	$city=$row['city'];  
				            $calorie=$row['calorie'];
				            $height=$row['height'];
				            $weight=$row['weight'];
				            $fat=$row['fat'];
				            $planname=$row['planName'];
				            $pamount=$row['amount'];
				            $pvalidity=$row['validity'];
				            $pdescription=$row['description'];
				            $paiddate=$row['paid_date'];
				            $expire=$row['expire'];
				            $remarks=$row['remarks'];

				        }
				    }
				    else{
				    	 echo "<html><head><script>alert('Change Unsuccessful');</script></head></html>";
				    	 echo mysqli_error($con);
				    }


				?>

				<table>
					<tr>
						<td><label>User ID:</label></td>
						<td><input type="text" name="name" readonly required value=<?php echo $memid?>></td>
					</tr>
					<tr>
						<td><label>Name:</label></td>
						<td><input type="text" readonly value='<?php echo $name?>'></td>
					</tr>
					<tr>
						<td><label>Gender:</label></td>
						<td height="35"><input type="text" readonly value=<?php echo $gender?>></td>
					</tr>
					<tr>
						<td><label>Mobile:</label></td>
						<td><input type="text" readonly maxlength="10" value=<?php echo $mobile?>></td>
					</tr>
					<tr>
						<td><label>Email:</label></td>
						<td><input type="email" readonly required value=<?php echo $email?>></td>
					</tr>
					<tr>
						<td><label>DOB:</label></td>
						<td><input type="text" readonly value=<?php echo $dob?>></td>
					</tr>
					<tr>
						<td><label>Joining Date:</label></td>
						<td><input type="text" readonly value=<?php echo $jdate?>></td>
					</tr>
					<tr>
						<td><label>Street Name:</label></td>
						<td><input type="text" readonly value='<?php echo $streetname?>'></td>
					</tr>
					<tr>
						<td><label>State:</label></td>
						<td><input type="text" name="state" value='<?php echo $state?>'></td>
					</tr>
					<tr>
						<td><label>City:</label></td>
						<td><input type="text" readonly value='<?php echo $city?>'></td>
					</tr>
					<tr>
						<td><label>Calorie:</label></td>
						<td><input type="text" readonly value=<?php echo $calorie?>></td>
					</tr>
					<tr>
						<td><label>Height:</label></td>
						<td><input type="text" readonly value=<?php echo $height?>></td>
					</tr>
					<tr>
						<td><label>Weight:</label></td>
						<td><input type="text" readonly value=<?php echo $weight?>></td>
					</tr>
					<tr>
						<td><label>Fat:</label></td>
						<td><input type="text" readonly value=<?php echo $fat?>></td>
					</tr>
					<tr>
						<td><label>Plan Name:</label></td>
						<td><input type="text" readonly value='<?php echo $planname?>'></td>
					</tr>
					<tr>
						<td><label>Plan Amount:</label></td>
						<td><input type="text" readonly value=<?php echo $pamount?>></td>
					</tr>
					<tr>
						<td><label>Plan Validity:</label></td>
						<td><input type="text" readonly value='<?php echo $pvalidity.' Month'?>'></td>
					</tr>
					<tr>
						<td><label>Plan Description:</label></td>
						<td><input type="text" readonly value='<?php echo $pdescription?>'></td>
					</tr>
					<tr>
						<td><label>Paid Date:</label></td>
						<td><input type="text" readonly value=<?php echo $paiddate?>></td>
					</tr>
					<tr>
						<td><label>Expired Date:</label></td>
						<td><input type="text" readonly value=<?php echo $expire?>></td>
					</tr>
					<tr>
						<td><label>Remarks:</label></td>
						<td><textarea readonly row='35'><?php echo $remarks?></textarea></td>
					</tr>
				</table>

				<input type="submit" value="Edit">
				<button><a href="table_view"> Back </a></button>
				
			</form>
					

			<?php include('footer.php'); ?>
    	</div>

  
</body>
</html>	

<?php
} else {
    
}
?>