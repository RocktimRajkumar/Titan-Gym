<?php
require '../../include/db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Titan Gym | New User</title>
    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">

</head>
      <body class="page-body  page-fade" onload="initializeMember()">

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

		<h3>New Netry</h3>

		<hr />
		
		<form action="new_submit.php" method="POST">
					
			<div class="form_group">
				<label for="memberid">Memebership ID : </label>
				<input type="text" name="m_id" value="<?php echo time(); ?>" readonly required/>	
			</div>

			<div class="form_group">
				<label for="username">Name : </label>
				<input type="text" name="u_name" id="username" required/>	
			</div>

			<div class="form_group">
				<label for="streetname">Street Name : </label>
				<input type="text" name="street_name" id="streetname" required/>	
			</div>

			<div class="form_group">
				<label for="city">City : </label>
				<input type="text" name="city" id="city" required/>	
			</div>

			<div class="form_group">
				<label for="zipcode">Zipcode : </label>
				<input type="number" name="zipcode" id="zipcode" maxlength="6" required />	
			</div>

			<div class="form_group">
				<label for="state">State : </label>
				<input type="text" name="state" id="state" required/>	
			</div>

			<div class="form_group">
				<label for="gender">Gender : </label>
				<select name="gender" id="gender" required>

					<option value="">--Please Select--</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</div>

			<div class="form_group">
				<label for="dob">Date Of Birth : </label>
				<input type="date" name="dob" id="dob" required>
			</div>

			<div class="form_group">
				<label for="mobile">Phone No : </label>
				<input type="number" name="mobile" id="mobile" maxlength="10" required/>	
			</div>

			<div class="form_group">
				<label for="email">Email ID : </label>
				<input type="email" name="email" id="email" required/>	
			</div>

			<div class="form_group">
				<label for="jdate">Joining Date : </label>
				<input type="date" name="jdate" id="jdate" required>
			</div>
					
			<div class="form_group">
				<label for="plan">Plan : </label>
				<select name="plan" id="plan" required>
					<option value="">--Please Select--</option>
					<?php
						$query="select * from plan";
						$result=mysqli_query($con,$query);
						if(mysqli_affected_rows($con)!=0){
							while($row=mysqli_fetch_row($result)){
								echo "<option value=".$row[0].">".$row[2]."</option>";
							}
						}

					?>
					
				</select>

			</div>

			<div class="form_group">
				<button type="submit">Register</button>
			</div>

		</form>
			<?php include('footer.php'); ?>
    	</div>

    </body>
</html>

