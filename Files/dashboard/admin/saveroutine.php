<?php
	require '../../include/db_conn.php';
	page_protect();
	
		
		$rname=$_POST["rname"];
		$day1=$_POST["day1"];
		$day2=$_POST["day2"];
		$day3=$_POST["day3"];
	    $day4=$_POST["day4"];
		$day5=$_POST["day5"];
		$day6=$_POST["day6"];
		
		
		
		$sql="insert into timetable values('$rname','$day1','$day2','$day3','$day4','$day5','$day6')";
	
		$result=mysqli_query($con,$sql);
		if($result){	
		
			echo "<head><script>alert('Member Added Failed');</script></head></html>";
		}
	
	
?>