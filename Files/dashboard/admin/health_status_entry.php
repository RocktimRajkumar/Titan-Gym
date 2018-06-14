<?php
require '../../include/db_conn.php';
page_protect();

$uid=$_POST['uid'];
$uname=$_POST['uname'];
$udob=$_POST['udob'];
$ujoin=$_POST['ujoin'];
$ugender=$_POST['ugender'];

?>

<!DOCTYPE html>
<html lang="en">
<head>

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

		<h2>Health Status</h2>

		<hr />

		<form action="subhealth.php" method="POST">
			<table>
				<tr><td><label for="uid">User ID : </label></td>
					<td><input type="text" id="uid" readonly value=<?php echo $uid ?>></td></tr>
				
				<tr><td><label for="uname">User Name : </label></td>
				<td><input type="text" id="uname" readonly value=<?php echo $uname ?>></td></tr>
				
				<tr><td><label for="dob">DOB : </label></td>
				<td><input type="text" id="dob" readonly value=<?php echo $udob ?>></td></tr>
				
				<tr><td><label for="gender">Gender : </label></td>				
				<td><input type="text" id="gender" readonly value=<?php echo $ugender ?>></td></tr>
				
				<tr><td><label for="joining">Joining Date: </label></td>				
				<td><input type="text" id="joining" readonly value=<?php echo $ujoin ?>></td></tr>

				<tr><td><label for="calorie">Calorie : </label></td>
				<td><input type="text" id="calorie"></td></tr>
			
				<tr><td><label for="height">Height : </label></td>
				<td><input type="text" id="height"></td></tr>
			
				<tr><td><label for="weight">Weight : </label></td>
				<td><input type="text" id="weight"></td></tr>
			
				<tr><td><label for="fat">Fat : </label></td>
				<td><input type="text" id="fat"></td></tr>
			
				<tr><td valign=top><label for="remarks">Remarks : </label></td>
				<td><textarea id="remarks" rows=5 style="resize:none"></textarea></td></tr>
			
				<tr><td></td><td colspan=2><input type="submit" value="SUBMIT"></td></tr>
			</table>
		</form>

			<?php include('footer.php'); ?>
    	</div>

    </body>
</html>

