<?php
require '../../include/db_conn.php';
page_protect();
 


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Titan Gym | View Routine</title>
    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<link href="a1style.css" rel="stylesheet" type="text/css">
	<style>
    	.page-container .sidebar-menu #main-menu li#routinehassubopen > a {
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

		

		
			<h2>Routines</h2>

		<hr />
		
		<table class="table table-bordered datatable" id="table-1" border=1>
			
				<tr>
					<th>Sl.No</th>
					<th>Routine Name</th>
					<th>Routine Details</th>
				</tr>
		
				<tbody>

				<?php


					$query  = "select * from timetable";
					//echo $query;
					$result = mysqli_query($con, $query);
					$sno    = 1;

					if (mysqli_affected_rows($con) != 0) 
					{
					    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
						{

					       
					           
					                
					                 echo "<tr><td>".$sno."</td>";
					                echo "<td>" . $row['tname'] . "</td>";
					           
					                
					                $sno++;
					                
					              echo '<td><a href="viewdetailroutine.php?id='.$row['tid'].'"><input type="button" class="a1-btn a1-blue" value="View Details" ></a></td></tr>';
									
					                $uid = 0;
					            
					        
					    }
					}

					?>									
				</tbody>

		</table>


				
		
		
		
		
		
		
		

			

    	</div>

    </body>
	<?php include('footer.php'); ?>
</html>


										
