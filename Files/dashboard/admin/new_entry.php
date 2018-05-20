<?php
require '../../include/db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Titan Gym</title>
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
		
		<form action="new_submit.php" method="POST" class="form-horizontal form-groups-bordered">
			
			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Membership ID :</label>					
					<div class="col-sm-5">
						<input type="text" name="p_id" value="<?php echo time(); ?>" class="form-control" readonly/>
					</div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Photo :</label>					
					<div class="col-sm-5">
						<script language="JavaScript">
								document.write( webcam.get_html(300, 220) );
						</script>
						<script language="JavaScript">
						    webcam.set_api_url( 'test.php' );
								webcam.set_quality( 100 ); // JPEG quality (1 - 100)
								webcam.set_shutter_sound( true ); // play shutter click sound
								webcam.set_hook( 'onComplete', 'my_completion_handler' );

								function take_snapshot(){
									// take snapshot and upload to server
									webcam.snap();
								}

						
						</script>		
						<input type=button  class="btn btn-primary" value="Take Snapshot" onClick="take_snapshot()">
					</div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Name :</label>					
					<div class="col-sm-5">
						<input type="text" name="p_name" id="textfield3" class="form-control" data-rule-required="true" data-rule-minlength="4" placeholder="Member Name" maxlength="30">
					</div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Address :</label>					
					<div class="col-sm-5">
						<input type="text" name="add" id="textfield5" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Address">
					</div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Zip Code :</label>					
					<div class="col-sm-5">
						<input type="text" name="zipcode" id="zipcode" class="form-control" data-rule-required="true" data-rule-minlength="20" placeholder="Zipcode">
					</div>
			</div>							

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Birthdate :</label>			
					<div class="col-sm-5">
						<input type="text" name="birthdate" id="birthdate" class="form-control datepicker" data-format="yyyy-m-d">
					</div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Age :</label>					
					<div class="col-sm-5">
						<input type="text" name="age" id="textfield4" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Age" onKeyPress="return checkIt(event)" maxlength="3">
					</div>
			</div>						

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Sex :</label>					
					<div class="col-sm-5">
						<select name="sex" id="bbb" data-rule-required="true" class="form-control">
						    <option value="">-- Please select --</option>
						    <option value="Male">Male</option>
						    <option value="Female">Female</option>
						</select>
					</div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Height :</label>					
					<div class="col-sm-5">
						<input type="text" name="height" id="textfield" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Height"  maxlength="10"> (In  FEET)
					</div>
			</div>		

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Weight :</label>					
					<div class="col-sm-5">
						<input type="text" name="weight" id="textfield" class="form-control" data-rule-required="true" data-rule-minlength="1" placeholder="Weight"  maxlength="10"> (In Kgs)
					</div>
			</div>			

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Nationality :</label>					
					<div class="col-sm-5">
						<input type="text" name="nationality" id="nationality" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Nationality">
					</div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Contact :</label>					
					<div class="col-sm-5">
						<input type="text" name="contact" id="textfield6" class="form-control" data-rule-required="true" data-rule-minlength="12" placeholder="Mobile / Phone" onKeyPress="return checkIt(event)" maxlength="12">
					</div>
			</div>			

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">E-Mail:</label>					
					<div class="col-sm-5">
						<input type="text" name="email"  id="emailfield" class="form-control" data-rule-minlength="5" placeholder="E-Mail" maxlength="60">
					</div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Facebook Account:</label>					
					<div class="col-sm-5">
						<input type="text" name="facebookaccount"  id="facebookaccount" class="form-control" data-rule-minlength="5" placeholder="Facebook Account" maxlength="60">
					</div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Twitter Account:</label>					
					<div class="col-sm-5">
						<input type="text" name="twitteraccount"  id="twitteraccount" class="form-control" data-rule-minlength="5" placeholder="Twitter Account" maxlength="60">
					</div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Contact Person:</label>					
					<div class="col-sm-5">
						<input type="text" name="contactperson"  id="contactperson" class="form-control" data-rule-minlength="5" placeholder="Contact Person" maxlength="60">
					</div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Previous Gym:</label>					
					<div class="col-sm-5">
						<input type="text" name="previousgym"  id="previousgym" class="form-control" data-rule-minlength="5" placeholder="Previous Gym" maxlength="60">
					</div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Years Training:</label>					
					<div class="col-sm-5">
						<input type="text" name="yearstraining"  id="yearstraining" class="form-control" data-rule-minlength="5" placeholder="Years Training" maxlength="60">
					</div>
			</div>																						

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Proof Given :</label>					
					<div class="col-sm-5">
						<select name="proof" id="bbb" data-rule-required="true" class="form-control">
							    <option value="">-- Please select --</option>
							    <option value="GSIS Card">GSIS Card</option>
							    <option value="Voter Card">Voter Card</option>
								<option value="Driving License">Driving License</option>
								<option value="Passport">Passport</option>
								<option value="College/School ID">College/School ID</option>
								<option value="Others">Others</option>
						</select>
						
					</div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Join Date :</label>					
					<div class="col-sm-5">
						<input type="text" name="date" id="textfield22" value="<?php echo date('Y-m-d'); ?>">
					</div>
			</div>			

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Membership Type :</label>					
					<div class="col-sm-5">
						<!--  <select name="mem_type" id="id" data-rule-required="true" class="country">
							<option value="">-- Please select --</option>
							<?php

								$query = "select * from mem_types";

								//echo $query;
								$result = mysqli_query($con, $query);

								if (mysqli_affected_rows($con) != 0) {
								    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
								        echo "<option value=" . $row['mem_type_id'] . ">" . $row['name'] . "</option>";
								        
								    }
								}

							?> -->
						</select>

						<span class="selectRequiredMsg">Please select an item.</span>
					</div>					
			</div>



			<div class="form-group">		
					<div class="col-sm-offset-3 col-sm-5">
						<div class="city"></div>
					</div>
			</div>				

			<div class="form-group">		
					<div class="col-sm-offset-3 col-sm-5">
						<button type="submit" class="btn btn-primary">Save changes</button>	
					</div>
			</div>				
									
										
		

		</form>
			<?php include('footer.php'); ?>
    	</div>

    </body>
</html>

