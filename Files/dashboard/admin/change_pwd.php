<?php
require '../../include/db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Titan Gym | Reset</title>
     <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" rel="stylesheet" type="text/css">

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

		<h3>Change Password</h3>

		<hr />

		<form action="change_s_pwd.php" enctype="multipart/form-data" method="POST" role="form" class="form-horizontal form-groups-bordered">

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Id :</label>					
					<div class="col-sm-5">
						<input type="text" name="login_id" value="<?php echo $_SESSION['user_data']; ?>" class="form-control" readonly/>
					</div>
			</div>
		
			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Login Key :	</label>					
					<div class="col-sm-5">
						<input type="text" name="login_key"  class="form-control"  data-rule-required="true" placeholder="Your secert key">

					</div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Password :</label>					
					<div class="col-sm-5">
						<input type="text" name="pwfield" id="pwfield" class="form-control"  data-rule-required="true" data-rule-minlength="6" placeholder="Your new passowrd">

					</div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Confirm password :</label>					
					<div class="col-sm-5">
						<input type="text" name="confirmfield" id="confirmfield" class="form-control"  data-rule-equalto="#pwfield" data-rule-required="true" data-rule-minlength="6" placeholder="Confirm Your new passowrd">

					</div>
			</div>


			<div class="form-group">		
					<div class="col-sm-offset-3 col-sm-5">
						<input type="submit" class="btn btn-primary" value="Submit">
						<button type="reset" class="btn">Cancel</button>
					</div>
			</div>	
									
		</form>
			<?php include('footer.php'); ?>
    	</div>

    </body>
</html>


