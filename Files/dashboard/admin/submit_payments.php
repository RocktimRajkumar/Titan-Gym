<?php
require '../../include/db_conn.php';
page_protect();

 $memID=$_POST['m_id'];
 $plan=$_POST['plan'];

//updating renewal from yes to no from enrolls_to table
$query="update enrolls_to set renewal='no' where uid='$memID'";
    if(mysqli_query($con,$query)==1){
      //inserting new payment data into enrolls_to table
      $query1="select * from plan where pid='$plan'";
      $result=mysqli_query($con,$query1);

        if($result){
          $value=mysqli_fetch_row($result);
          date_default_timezone_set("Asia/Calcutta"); 
          $d=strtotime("+".$value[3]." Months");
          $cdate=date("Y-m-d"); //current date
          $expiredate=date("Y-m-d",$d); //adding validity retrieve from plan to current date
          //inserting into enrolls_to table of corresponding userid
          $query2="insert into enrolls_to(pid,uid,paid_date,expire,renewal) values('$plan','$memID','$cdate','$expiredate','yes')";
          if(mysqli_query($con,$query2)==1){

               echo "<head><script>alert('Payment Successfully update ');</script></head></html>";
               echo "<meta http-equiv='refresh' content='0; url=payments.php'>";
            }
             
            else{
               echo "<head><script>alert('Payment update Failed');</script></head></html>";
              echo "error: ".mysqli_error($con);
            }
            
          }
          else{
            echo "<head><script>alert('Payment update Failed');</script></head></html>";
            echo "error: ".mysqli_error($con);
          }

         
        }
        else
        {
          echo "<head><script>alert('Payment update Failed');</script></head></html>";
          echo "error: ".mysqli_error($con);
        }

?>
