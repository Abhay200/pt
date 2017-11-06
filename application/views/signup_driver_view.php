<html>
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="C:\xampphtdocs\pt\css\bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="style.css">

		<title>Admin</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h4>Sign up to Drive for us.</h4>
					<form class="" method="post" action="#">
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="gender" class="cols-sm-2 control-label">Gender</label>
								<ul>
  									<li>
									    <input type="radio" id="f-option" name="selector">
									    	<label for="f-option">Male</label>
									    
									   			<div class="check"></div>
  									</li>
  
  									<li>
   										<input type="radio" id="s-option" name="selector">
    										<label for="s-option">Female</label>
    
    											<div class="check"><div class="inside"></div></div>
  									</li>
								</ul>
						</div>
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<a href="success_signup_view.php" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Register</a>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</body>


</html>


























































<!--div class="container"
<div class="row">
<div class="col-xs-11 col-md-9 col-md-offset-2">
<h2 style="color:#7C7C7C;">DRIVER SIGNUP <small></small></h2><br/>

<div class="col-md-6">
<?php
if($result[0]!="NULL")
{
	if($result[0]=="success")
	{
		echo '<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert">&times;</a>';
		echo $result[1];
		echo '</div>';
	}
	if($result[0]=="error")
	{
		echo '<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><strong>Error! </strong>';
		echo $result[1];
		echo '</div>';
	}
}
?>
<form method="POST" action="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" class="form">
	<div class="form-group">
		<label for="name">Name </label>
		<input type="text" name="name" style="text-transform:uppercase;" required class="form-control" value="<?php echo set_value('name'); ?>">
	</div>
	<div class="form-group">
		<label for="gender">Gender </label>
		<div class="radio">
		<?php
			if(isset($_POST['gender']))
			{
				if($_POST['gender']=="male")
					$male_1=1;
				else if($_POST['gender']=="female")
					$female_1=1;
			}
		?>
		<label><input type="radio" name="gender" value="male" required <?php if(isset($male_1)) echo 'checked="checked"';?>>Male</label>
		</div>
		<div class="radio">
		<label><input type="radio" name="gender" value="female" required <?php if(isset($female_1)) echo 'checked="checked"';?>>Female</label>
		</div>
	</div>
	<div class="form-group">
		
		<p class="text-danger" id="admn_fbk"></p>
	</div>
	<div class="form-group">
		<label for="password">Password </label>
		<input type="password" id="password" name="password" required class="form-control" >
		<p class="text-danger fbk" id="psw_fbk">Sorry! The password should atleast be 5 characters</p>
	</div>
	<div class="form-group">
		<label for="r_password">Password Again</label>
		<input type="password" id="r_password" name="r_password" required class="form-control" >
		<p class="text-danger fbk" id="r_psw_fbk">Sorry! The passwords doesn't match</p>
	</div>
	<div class="form-group">
		<label for="email">Email id </label>
		<input type="email" name="email" required class="form-control"  value="<?php echo set_value('email'); ?>">
	</div>
    <div class="form-group">
    <label for="age">Age</label>
        <input type="number" name="age" required class="form-control"  value="<?php echo set_value('age'); ?>">
    </div>
    <div class="form-group">
    <label for="idproof">ID proof number</label>
        <input type="number" name="idproof" required class="form-control"  value="<?php echo set_value('age'); ?>">
    </div>
	<div class="form-group">
		<label for="mobno">Mobile number </label>
		<div class="input-group">
    	<span class="input-group-addon">+91</span>
		<input type="text" name="mobno" required class="form-control" maxlength="10" value="<?php echo set_value('mobno'); ?>">
		</div>
	</div>
	
	
	<div class="form-group">
		<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Signup as passenger">
	</div>
</form>>

</div><!--internal col -->

</div><!-- col classes -->
</div><!-- row class -->
</div><!-- container class -->