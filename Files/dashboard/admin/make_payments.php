<?php
require '../../include/db_conn.php';
page_protect();
if (isset($_POST['userID']) && isset($_POST['planID'])) {
    $uid  = $_POST['userID'];
    $planid=$_POST['planID'];
    $query1 = "select * from users WHERE userid='$uid'";
    
    $result1 = mysqli_query($con, $query1);
    
    if (mysqli_affected_rows($con) == 1) {
        while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
            
            $name = $row1['username'];
            $query2="select * from plan where pid='$planid'";

            $result2=mysqli_query($con,$query2);
            if($result2){
               $planValue=mysqli_fetch_array($result2,MYSQLI_ASSOC);
               $planName=$planValue['planName'];
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Titan Gym | Make Payment</title>
     <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
    <link href="a1style.css" type="text/css" rel="stylesheet">

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

		<h3>Titan Gym</h3>

		<hr />

		<form action="submit_payments.php" method="POST">

			<div class="form-group">
				<label for="field-1">Membership ID :</label>					
					<div>
						<input type="text" name="m_id" id="field-1" value="<?php echo $uid; ?>" readonly/>
					</div>
			</div>

			<div class="form-group">
				<label for="field-2">Name :</label>					
					<div>
						<input type="text" name="u_name" id="fiedl-2" value="<?php echo $name; ?>" placeholder="Member Name" maxlength="30" readonly/>
					</div>
			</div>


			<div class="form-group">
				<label for="field-3">Previous Plan :</label>					
					<div>
						<input type="text" name="prevPlan" id="field-3" value="<?php echo $planName; ?>" readonly>
					</div>
			</div>

			<div class="form-group">
				<label for="field-4">Membership Type :</label>					
					<div class="col-sm-5">
						<select name="plan" id="field-4" required>
							<option value="">-- Please select --</option>
							<?php
    
							    $query = "select * from plan";
							    
							    //echo $query;
							    $result = mysqli_query($con, $query);
							    
							    if (mysqli_affected_rows($con) != 0) {
							        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							            echo "<option value=" . $row['pid'] . ">" . $row['planName'] . "</option>";
							            
							        }
							    }
							    
							?>
						</select>
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


<?php
} else {
    
}
?>