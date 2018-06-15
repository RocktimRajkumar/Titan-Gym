<?php
require '../../include/db_conn.php';
page_protect();

if(isset($_POST['submit'])){

  $usrname=$_POST['login_id'];
  $fulname=$_POST['full_name'];

  $query="update admin set username='".$usrname."',Full_name='".$fulname."' where username='".$_SESSION['full_name']."'";

  if(mysqli_query($con,$query)){
  	echo "<head><script>alert('Profile Change ');</script></head></html>";

     echo "<meta http-equiv='refresh' content='0; url=logout.php'>";
  }
  else{
  	echo "<head><script>alert('NOT SUCCESSFUL, Check Again');</script></head></html>";
	 echo "error".mysqli_error($con);
  }

  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Titan Gym | Admin</title>
    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" rel="stylesheet" type="text/css">
	<style>
    	.page-container .sidebar-menu #main-menu li#adminprofile > a {
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

		<h3>Edit user profile</h3>
		
		(You will be required to Login Again After Profile Update)
		
		<hr />
		
		<?php $user_id_auth = $_SESSION['user_data']; ?>

		<form action=" " enctype="multipart/form-data" method="POST" role="form" class="form-horizontal form-groups-bordered">

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Id</label>					
					<div class="col-sm-5">
						<input type="text" name="login_id" value="<?php echo $_SESSION['user_data']; ?>" class="form-control" required/>
					</div>
			</div>

			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Full Name</label>					
					<div class="col-sm-5">
						<input class="form-control" type="text" name="full_name" id="textfield2" value="<?php echo $_SESSION['username']; ?>" maxlength="25" required>
					</div>
			</div>

			
								  
			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Password</label>					
					<div class="col-sm-5">
						<p><span class="form-control">*********</span> <a href="change_pwd.php" class="btn">Change password</a> <span class="help-block">*For security reasons hidden</span></p>
					</div>
			</div>									

			<div class="form-group">		
					<div class="col-sm-offset-3 col-sm-5">
						<input type="submit" class="btn btn-primary" value="Submit" name="submit">
						<button type="reset" class="btn">Cancel</button>
					</div>
			</div>

		</form>

			<?php include('footer.php'); ?>

    	</div>

    </body>
</html>


										