<?php
require '../../include/db_conn.php';
page_protect();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Titan Gym | New Plan</title>
  
	<link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
  

</head>
    <body class="page-body  page-fade" onload="initializeMember()">

    	<div class="page-container sidebar-collapse" id="navbarcollapse">	
	
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

		<h2>New Plan Details</h2>

		<hr />

		<form action="submit_plan_new.php" method="POST">

			<div class="form-group">
				
				<label for="planID">Plan ID :</label>
				<?php
							function getRandomWord($len = 6)
							{
							    $word = array_merge(range('A', 'Z'));
							    shuffle($word);
							    return substr(implode($word), 0, $len);
							}

						?>
				<input type="text" name="planID" id="planID" readonly value="<?php echo getRandomWord(); ?>">

			</div>   

			<div class="form-group">

				<label for="planName">Plan Name : </label>
				<input type="text" name="planName" id="planName">

			</div>

			 <div class="form-group">

			 	<label for="planDesc">Plan Description : </label>
			 	<input type="text" name="planDesc" id="planDesc">

			 </div> 

			 <div class="form-group">

			 	<label for="planVal">Plan Validity : </label>
			 	<input type="text" name="planVal" id="planVal">
			
			</div>

			 <div class="form-group">
			 
			 	<label for="planAmnt">Plan Amount : </label>
			 	<input type="text" name="planAmnt" id="planAmnt">
			 
			 </div>

			 <div class="form_group">
				<button type="submit">Create Plan</button>
			</div>

		</form>

			<?php include('footer.php'); ?>
    	</div>

    </body>
</html>


