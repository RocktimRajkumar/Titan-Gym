<?php
require '../../include/db_conn.php';
page_protect();
    
    
   $id=$_POST['tid'];
   $day1=$_POST['day1'];
   $day2=$_POST['day2'];
   $day3=$_POST['day3'];
   $day4=$_POST['day4'];
   $day5=$_POST['day5'];
   $day6=$_POST['day6'];
   
    
    $query1="update timetable set day1='".$day1."',day2='".$day2."',day3='".$day3."',day4='".$day4."',day5='".$day5."',day6='".$day6."' where tid=".$id."";

   if(mysqli_query($con,$query1)){
     
            echo "<html><head><script>alert('Routine Updated Successfully');</script></head></html>";
            echo "<meta http-equiv='refresh' content='0; url=viewroutine.php'>";  
   }
   else{
    echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
    echo "error".mysqli_error($con);
   }
    

?>
