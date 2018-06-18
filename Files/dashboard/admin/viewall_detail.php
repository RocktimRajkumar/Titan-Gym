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
	#boxxe
	{
		width:230px;
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

			<?php
	    
				    $query  = "SELECT * FROM users u 
				    		   INNER JOIN address a ON u.userid=a.id
				    		   INNER JOIN  health_status h ON u.userid=h.uid
				    		   INNER JOIN enrolls_to e on u.userid=e.uid
				    		   INNER JOIN plan p on e.pid=p.pid
				    		   WHERE userid='$memid' and e.renewal='yes'";
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
				          	$zipcode=$row['zipcode'];
				            $calorie=$row['calorie'];
				            $height=$row['height'];
				            $weight=$row['weight'];
				            $fat=$row['fat'];
				            $planname=$row['planName'];
				            $pamount=$row['amount'];
				            $pvalidity=$row['validity'];
				            $pdescription=$row['description'];
				            $paiddate=$row['paid_date'];
				            $expire=$row['expire'];
				            $remarks=$row['remarks'];

				        }
				    }
				    else{
				    	 echo "<html><head><script>alert('Change Unsuccessful');</script></head></html>";
				    	 echo mysqli_error($con);
				    }


				?>
			
			
			
			
			<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:600px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>Edit Member Details</h3>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="edit_member.php">
         <table width="100%" border="0" align="center">
         <tbody><tr>
           <td height="35">
           	 </td></tr><tr>
           	   <td height="35">USER ID:</td>
           	   <td height="35"><input type="text" name="name" id="boxxe" readonly="" required="" value='<?php echo $memid?>'></td>
         	   </tr>
             <tr>
               <td height="35">NAME:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" value='<?php echo $name?>'></td>
             </tr>
             <tr>
               <td height="35">GENDER:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" value='<?php echo $gender?>'></td>
             </tr>
			 <tr>
               <td height="35">MOBILE:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" maxlength="10" value='<?php echo $mobile ?>'></td>
             </tr>
			 <tr>
               <td height="35">EMAIL:</td>
               <td height="35"><input type="email" id="boxxe" readonly="" required="" value='<?php echo $email?>'></td>
             </tr>
			 <tr>
               <td height="35">DATE OF BIRTH</td>
               <td height="35"><input type="text" id="boxxe" readonly="" value='<?php echo $dob?>'></td>
             </tr>
			 <tr>
               <td height="35">JOINING DATE:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" value='<?php echo $jdate?>'></td>
             </tr>
			 <tr>
               <td height="35">STREET NAME:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" value='<?php echo $streetname?>'></td>
             </tr>
			 <tr>
               <td height="35">STATE:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" name="state" value='<?php echo $state?>'></td>
             </tr>
			 <tr>
               <td height="35">CITY:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" value='<?php echo $city?>'></td>
             </tr>
              <tr>
               <td height="35">ZIPCODE:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" value='<?php echo $zipcode?>'></td>
             </tr>
			 <tr>
               <td height="35">CALORIE:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" value='<?php echo $calorie?>'></td>
             </tr>
			 <tr>
               <td height="35">HEIGHT:</td>
               <td height="35"><input type="text" readonly="" id="boxxe" value='<?php echo $height?>'></td>
             </tr>
			 <tr>
               <td height="35">WEIGHT:</td>
               <td height="35"><input type="text" readonly="" value='<?php echo $weight?>' id="boxxe"></td>
             </tr>
			 <tr>
               <td height="35">FAT:</td>
               <td height="35"><input type="text" readonly="" id="boxxe" value='<?php echo $weight?>'></td>
             </tr>
			 <tr>
               <td height="35">PLAN NAME:</td>
               <td height="35"><input type="text" readonly="" id="boxxe" value='<?php echo $planname?>'></td>
             </tr>
			 <tr>
               <td height="35">PLAN AMOUNT:</td>
               <td height="35"><input type="text" readonly="" id="boxxe" value='<?php echo $pamount?>'></td>
             </tr>
			  <tr>
               <td height="35">PLAN VALIDITY:</td>
               <td height="35"><input type="text" readonly="" id="boxxe" value='<?php echo $pvalidity.' Month'?>'></td>
             </tr>
			  <tr>
               <td height="35">PLAN DESCRIPTION:</td>
               <td height="35"><input type="text" readonly="" id="boxxe" value='<?php echo $pdescription?>'></td>
             </tr>
			  <tr>
               <td height="35">PAID DATE:</td>
               <td height="35"><input type="text" readonly="" id="boxxe" value='<?php echo $paiddate?>'></td>
             </tr>
			 <tr>
               <td height="35">EXPIRED DATE:</td>
               <td height="35"><input type="text" readonly="" id="boxxe" value='<?php echo $expire?>'></td>
             </tr>
			 <tr>
               <td height="35">REMARKS:</td>
               <td height="35"><textarea readonly style="resize:none; margin: 0px; width: 230px; height: 53px;"  ><?php echo $remarks?></textarea></td>
             </tr>
            
             
            
             <tr>
             </tr><tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="EDIT">
                 <a href="table_view"><input class="a1-btn a1-blue" id="" value="BACK"></a></td>
             </tr>
           
         
         </tbody></table>
       
    </div>
    </div>   
			
			
					

			<?php include('footer.php'); ?>
    	</div>

  
</body>
</html>	

<?php
} else {
    
}
?>
