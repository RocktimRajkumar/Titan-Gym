<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="Laborator.co" />
    
    <title>Titan Gym | Login</title>
    <link rel="stylesheet" href="./css/style.css"/>
	<link rel="stylesheet" type="text/css" href="./css/entypo.css">

</head>

<body class="page-body login-page login-form-fall">
	<div id="container">
		<div class="login-container">
			
			<div class="login-header login-caret">
				
				<div class="login-content">
					
					<a href="#" class="logo">
						<img src="./images/logo.png" alt="" />
					</a>
			
				</div>
				
			</div>
			
			<div class="login-form">
				
				<div class="login-content">
					
					<form action="change_s_pwd.php" method="POST" id="bb">	

						<div class="form-group">					
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
									<input type="text" class="form-control" name="login_id" placeholder="Your Login ID" data-rule-required="true" data-rule-minlength="6"/>
							</div>
						</div>				
										
						<div class="form-group">					
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-key"></i>
								</div>
								<input type="text" name="login_key"  class="form-control" placeholder="Your secert key" data-rule-required="true" data-rule-minlength="6">
							</div>				
						</div>

						<div class="form-group">					
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-key"></i>
								</div>
								<input type="password" name="pwfield" id="pwfield" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Your new passowrd">
							</div>				
						</div>

						<div class="form-group">					
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-key"></i>
								</div>
								<input type="password" name="confirmfield" id="confirmfield" class="form-control" data-rule-equalto="#pwfield" data-rule-required="true" data-rule-minlength="6" placeholder="Confirm Your new passowrd">
							</div>				
						</div>
						
						<div class="form-group">
							<button type="Submit" name="btnLogin" class="btn btn-primary">
								Login In
								<i class="entypo-login"></i>
							</button>
							<a href="./index.php"><button  type="button" class="btn btn-primary">Cancel</button></a>
						</div>
					</form>
				
				</div>
				
			</div>
			
		</div>
	</div>	
		
    </body>
</html>    	


