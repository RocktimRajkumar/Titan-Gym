<ul id="main-menu" class="">
			
    <li class="active opened active"><a href="index.php"><i class="entypo-gauge"></i><span>Dashboard</span></a></li>
                
	<li><a href="new_entry.php"><i class="entypo-user-add"></i><span>New Registration</span></a>                
				
	<li><a href="payments.php"><i class="entypo-star"></i><span>Payments</span></a></li>

	<li class="" id="hassubopen"><a href="#" onclick="memberExpand(1)"><i class="entypo-users"></i><span>Members</span></a>
		<ul id="memExpand">
			<li class="active">
				<a href="view_mem.php"><span>View Members</span></a></li>

			<li><a href="table_view.php"><span>View / Enter Schedule</span></a></li>
		</ul>
	</li>

	<li><a href="new_health_status.php"><i class="entypo-user-add"></i><span>Health Status</span></a> 	

		<li class="" id="planhassubopen"><a href="#" onclick="memberExpand(2)"><i class="entypo-quote"></i><span>Plan</span></a>

		<ul id="planExpand">
			<li class="active">
				<a href="new_plan.php"><span>New Plan</span></a></li>

			<li><a href="change_values.php"><span>Edit Subsciption Details</span></a></li>
		</ul>

	<li><a href="new_plan.php"><i class="entypo-box"></i><span>Overview</span></a>

		<ul>
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

	<li><a href="new_plan.php"><i class="entypo-alert"></i><span>Alerts</span></a>

		<ul>
			<li class="active">
				<a href="unpaid.php"><span>Unpaid Members</span></a>
			</li>

			<li>
				<a href="sub_end.php"><span>Ending Membership</span></a>
			</li>

		</ul>

	</li>

	<li><a href="more-userprofile.php"><i class="entypo-folder"></i><span>Profile</span></a></li>

	<li><a href="logout.php"><i class="entypo-logout"></i><span>Logout</span></a></li>

</ul>	