
<ul id="main-menu" class="" >
			
    <li id="dash"><a href="index.php"><i class="entypo-gauge"></i><span>Dashboard</span></a></li>
                
	<li id="regis"><a href="new_entry.php"><i class="entypo-user-add"></i><span>New Registration</span></a>                
				
	<li id="paymnt"><a href="payments.php"><i class="entypo-star"></i><span>Payments</span></a></li>

	<li class="" id="hassubopen"><a href="#" onclick="memberExpand(1)"><i class="entypo-users"></i><span>Members</span></a>
		<ul id="memExpand">
			<li class="active">
				<a href="view_mem.php"><span>Edit Members</span></a></li>

			<li><a href="table_view.php"><span>View Memeber</span></a></li>
		</ul>
	</li>

	<li id="health_status"><a href="new_health_status.php"><i class="entypo-user-add"></i><span>Health Status</span></a> 	

		<li class="" id="planhassubopen"><a href="#" onclick="memberExpand(2)"><i class="entypo-quote"></i><span>Plan</span></a>

		<ul id="planExpand">
			<li class="active">
				<a href="new_plan.php"><span>New Plan</span></a></li>

			<li><a href="view_plan.php"><span>Edit Subsciption Details</span></a></li>
		</ul>

	<li class="" id="overviewhassubopen"><a href="#" onclick="memberExpand(3)"><i class="entypo-box"></i><span>Overview</span></a>

		<ul id="overviewExpand">
			<li class="active">
				<a href="over_members_month.php"><span>Members per Month</span></a>
			</li>

			<li>
				<a href="over_members_year.php"><span>Members per Year</span></a>
			</li>

			<li>
				<a href="revenue_month.php"><span>Income per Month</span></a>
			</li>			

		</ul>

	<li class="" id="routinehassubopen"><a href="#" onclick="memberExpand(4)"><i class="entypo-alert"></i><span>Exercise Routine</span></a>

		<ul id="routineExpand">
			<li class="active">
				<a href="addroutine.php"><span>Add Routine</span></a>
			</li>

			<li>
				<a href="editroutine.php"><span>Edit Routine</span></a>
			</li>

			<li>
				<a href="viewroutine.php"><span>View Routine</span></a>
			</li>

		</ul>

	</li>

	<li id="adminprofile"><a href="more-userprofile.php"><i class="entypo-folder"></i><span>Profile</span></a></li>

	<li><a href="logout.php"><i class="entypo-logout"></i><span>Logout</span></a></li>

</ul>	
