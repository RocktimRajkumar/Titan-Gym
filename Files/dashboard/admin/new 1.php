<?php
require '../../include/db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Titan Gym | Payments</title>
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

		<h2>Payments</h2>

		<hr />
		
		
			<table border='0' WIDTH='90%' align="center"  id="table-1">
						
						<tr>
<td WIDTH='6%' style="color:darkgreen"><b><u>SL.NO</u></b></td>
<TD style="color:darkgreen" WIDTH='10%'><b><u>MEMBERSHIP EXPIRY</u></b></TD>
<TD style="color:darkgreen" WIDTH='7%'><b><u>NAME </u></b></TD>
                            <TD style="color:darkgreen" WIDTH='6%'><b><u>MEMBER ID</u></b></TD>
                            <TD style="color:darkgreen" WIDTH='7%'><b><u>PHONE</u></b></TD>
                            <TD style="color:darkgreen" WIDTH='10%'><b><u>E-MAIL</u></b></TD>
                            
                            <TD style="color:darkgreen" WIDTH='7%'><b><u>GENDER</u></b></TD>
                            
<TD style="color:darkgreen" WIDTH='%'><b><u>ACTION</u></b></TD>
<TD style="color:darkgreen" WIDTH='15%'><b><u>MEMO</u></b></TD>


								
						</tr>
						<?php


					$query  = "select * from enrolls_to where renewal='yes' ORDER BY expire";
					//echo $query;
					$result = mysqli_query($con, $query);
					$sno    = 1;

					if (mysqli_affected_rows($con) != 0) {
					    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

					        $uid   = $row['uid'];
					        $planid=$row['pid'];
					        $query1  = "select * from users WHERE userid='$uid'";
					        $result1 = mysqli_query($con, $query1);
					        if (mysqli_affected_rows($con) == 1) {
					            while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
					                
					                 echo "<tr><td>".$sno."</td>";
					                echo "<td>" . $row['expire'] . "</td>";
					                echo "<td>" . $row1['username'] . "</td>";
					                echo "<td>" . $row1['userid'] . "</td>";
					                echo "<td>" . $row1['mobile'] . "</td>";
					                echo "<td>" . $row1['email'] . "</td>";
					                echo "<td>" . $row1['gender'] . "</td>";
									
									echo "<td><form action='make_payments.php' method='post'><input type='hidden' name='userID' value='" . $uid . "'/>
					                <input type='hidden' name='planID' value='" . $planid . "'/><input type='submit' value='Add Payment ' class='btn btn-info'/></form></td>";
					                
					                $sno++;
					                
					                echo '<td><a href="memo.php?id='.$row['et_id'].'"><input type="button" class="a1-btn a1-green" value="Memo" ></a></td></tr>';
									
					                $uid = 0;
									
					            }
					        }
					    }
					}

					?>			

					</TABLE>


			<?php include('footer.php'); ?>
    	</div>

    </body>
</html>


