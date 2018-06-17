<?php
require '../../include/db_conn.php';
page_protect();
    
    
   $id=$_POST['planid'];
   $pname=$_POST['planname'];
   $pdesc=$_POST['desc'];
   $pval=$_POST['planval'];
   $pamt=$_POST['amount'];
   
    
    $query1="update plan set planName='".$pname."',description='".$pdesc."',validity='".$pval."',amount='".$pamt."' where pid='".$id."'";

   if(mysqli_query($con,$query1)){
     
            echo "<html><head><script>alert('PLAN Updated Successfully');</script></head></html>";
            echo "<meta http-equiv='refresh' content='0; url=view_plan.php'>";  
   }
   else{
    echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
    echo "error".mysqli_error($con);
   }
    

?>
