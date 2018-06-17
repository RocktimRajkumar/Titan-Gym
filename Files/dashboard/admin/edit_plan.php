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
	<link href="a1style.css" rel="stylesheet" type="text/css">
	<style>
    	.page-container .sidebar-menu #main-menu li#planhassubopen > a {
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

		<h3>Update Plan</h3>

		<hr />
		<?php
		$id=$_GET['id'];
		$sql="Select * from plan t Where t.pid=$id";
		$res=mysqli_query($con, $sql);
		
					 if($res){
						      	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
				
						      }
						
		?>
		
		<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:600px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>PLAN UPDATE</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="updateplan.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">PLAN ID:</td>
           	   <td height="35">
				<input type="text" name="planid" id="planID" readonly value='<?php echo $row['pid'] ?>'></td>
				
				
         	   </tr>
             <tr>
               <td height="35">PLAN NAME:</td>
               <td height="35"><input name="planname" id="planName" type="text" value='<?php echo $row['planName'] ?>'  size="40"></td>
             </tr>
             <tr>
               <td height="35">PLAN DESCRIPTION</td>
               <td height="35"><input type="text" name="desc" id="planDesc"  value='<?php echo $row['description'] ?>' size="40"></td>
             </tr>
             <tr>
               <td height="35">PLAN VALIDITY</td>
               <td height="35"><input type="number" name="planval" id="planVal" value='<?php echo $row['validity'] ?>' size="40"></td>
             </tr>
             
             <tr>
               <td height="35">PLAN AMOUNT:</td>
               <td height="35"><input type="text" name="amount" id="planAmnt" value='<?php echo $row['amount'] ?>'  size="40"></td>
             </tr>
             
            
             <tr>
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="UPDATE PLAN" >
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Reset"></td>
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
    </div>
    </div>   
		
		

			<?php include('footer.php'); ?>
    	</div>

    </body>
</html>


