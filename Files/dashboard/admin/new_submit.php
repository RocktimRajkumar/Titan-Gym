<?php
require '../../include/db_conn.php';
page_protect();

 $memID=$_POST['m_id'];
 $uname=$_POST['u_name'];
 $stname=$_POST['street_name'];
 $city=$_POST['city'];
 $zipcode=$_POST['zipcode'];
 $state=$_POST['state'];
 $gender=$_POST['gender'];
 $dob=$_POST['dob'];
 $phn=$_POST['mobile'];
 $email=$_POST['email'];
 $jdate=$_POST['jdate'];
 $plan=$_POST['plan'];

$query="insert into users(username,gender,mobile,email,dob,joining_date,userid) values('$uname','$gender','$phn','$email','$dob','$jdate','$memID')";
    if(mysqli_query($con,$query)==1){
      $query1="select * from plan where id=$plan";
      $result=mysqli_query($con,$query1);

        if($result){
          $value=mysqli_fetch_row($result);
          $d=strtotime("+".$value[4]." Months");
          $cdate=date("m-d-Y")
          $exdate=date("m-d-Y",$d);
          $query2="insert into enrolls_to(pid,uid,paid_date,expire,renewal) values($plan,'$memID','$cdate','$exdate','yes'";
          if(mysqli_query($con,$query2)==1){
             echo "<head><script>alert('Member Added ');</script></head></html>";
             echo "<meta http-equiv='refresh' content='0; url=new_entry.php'>";
          }
          else{
            echo "<head><script>alert('Member Added Failed');</script></head></html>";
            echo "error: ".mysqli_error($con);
          }

         
        }
        else
        {
          echo "<head><script>alert('Member Added Failed');</script></head></html>";
          echo "error: ".mysqli_error($con);
        }

    }
    else{
        echo "<head><script>alert('Member Added Failed');</script></head></html>";
        echo "error: ".mysqli_error($con);
      }

?>
