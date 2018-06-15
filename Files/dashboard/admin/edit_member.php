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

			<form action="edit_mem_submit.php" method="POST" >

				<?php
	    
				    $query  = "SELECT * FROM users u 
				    		   INNER JOIN address a ON u.userid=a.id
				    		   INNER JOIN  health_status h ON u.userid=h.uid
				    		   WHERE userid='$memid'";
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
						<td><input type="text" name="uid" readonly required value=<?php echo $memid?>></td>
					</tr>
					<tr>
						<td><label>Name:</label></td>
						<td><input type="text" name="uname" value=<?php echo $name?>></td>
					</tr>
					<tr>
						<td><label>Gender:</label></td>
						<td height="35"><select name="gender" id="gender" required>

						<option <?php if($gender == 'Male'){echo("selected");}?> value="Male">Male</option>
						<option <?php if($gender == 'Female'){echo("selected");}?> value="Female">Female</option>
						</select></td>
					</tr>
					<tr>
						<td><label>Mobile:</label></td>
						<td><input type="number" name="phone" maxlength="10" value=<?php echo $mobile?>></td>
					</tr>
					<tr>
						<td><label>Email:</label></td>
						<td><input type="email" name="email" required value=<?php echo $email?>></td>
					</tr>
					<tr>
						<td><label>DOB:</label></td>
						<td><input type="date" name="dob" value=<?php echo $dob?>></td>
					</tr>
					<tr>
						<td><label>Joining Date:</label></td>
						<td><input type="date" name="jdate" value=<?php echo $jdate?>></td>
					</tr>
					<tr>
						<td><label>Street Name:</label></td>
						<td><input type="text" name="stname" value=<?php echo $streetname?>></td>
					</tr>
					<tr>
						<td><label>State:</label></td>
						<td><input type="text" name="state" value=<?php echo $state?>></td>
					</tr>
					<tr>
						<td><label>City:</label></td>
						<td><input type="text" name="city" value=<?php echo $city?>></td>
					</tr>
					<tr>
						<td><label>Calorie:</label></td>
						<td><input type="text" name="calorie" value=<?php echo $calorie?>></td>
					</tr>
					<tr>
						<td><label>Height:</label></td>
						<td><input type="text" name="height" value=<?php echo $height?>></td>
					</tr>
					<tr>
						<td><label>Weight:</label></td>
						<td><input type="text" name="weight" value=<?php echo $weight?>></td>
					</tr>
					<tr>
						<td><label>Fat:</label></td>
						<td><input type="text" name="fat" value=<?php echo $fat?>></td>
					</tr>
					<tr>
						<td><label>Remarks:</label></td>
						<td><textarea name="remarks" row='35'><?php echo $remarks?></textarea></td>
					</tr>
				</table>

				<input type="submit" value="Update">
				<input type="reset" value="Cancel">
				
			</form>
					

			<?php include('footer.php'); ?>
    	</div>

  
</body>
</html>	

<?php
} else {
    
}
?>