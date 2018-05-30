<?php
require '../../include/db_conn.php';
page_protect();

	$planid =$_POST['planid'];
    $name = $_POST['planname'];
    $desc = $_POST['desc'];
    $planval = $_POST['planval'];
    $amount = $_POST['amount'];
    
   //Inserting data into plan table
    $query="insert into plan(pid,planName,description,validity,amount) values('$planid','$name','$desc','$planval','$amount')";
   
   

	 if(mysqli_query($con,$query)==1){
        //Inserting plan id into timetable table
        $query1="insert into timetable(pid) values('$planid')";
        if(mysqli_query($con,$query1)==1){
        echo "<head><script>alert('PLAN Added ');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=new_plan.php'>";
        }
        else{
        echo "<head><script>alert('NOT SUCCESSFUL, Check Again');</script></head></html>";
        echo "error".mysqli_error($con);
        //Delete record from plan if failed to insert into timetable table
        $query3 = "DELETE FROM plan WHERE pid='$planid'";
                mysqli_query($con,$query3);
      }

    }
    else{
        echo "<head><script>alert('NOT SUCCESSFUL, Check Again');</script></head></html>";
        echo "error".mysqli_error($con);
      }

	
	
	
	
	

?>
