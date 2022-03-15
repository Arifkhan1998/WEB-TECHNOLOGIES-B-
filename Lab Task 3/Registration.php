<?php 

	session_start();

		if (isset($_SESSION['User_name']))
		  {
		    header("location:Login.php");
		  }
		else
		{
		  require 'head/Top.php';
		}
require 'controller/store_data.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>From</title>
	<link rel="stylesheet" type="text/css" href="css/registration_style.css">
</head>
<body>

	



	
	<div class="reg_box">
			<div class="header">
		<p class="header_text">Registration</>
	</div>
		<form method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="wraper">
				<div class="first_inputs">
		<div class="content1" >
			<input type="text" name="name" class="input" placeholder="Enter Your Name" value="<?php echo $name;?>"><span class="error"> <?php echo $nameerr;?></span><br>
			
		</div>

		
		<div class="content1">
			<input type="text" name="email" placeholder="Enter Your Email" class="input" value="<?php echo $email;?>">
		<span class="error">
	 		<?php echo $emailerr;?>
	 	</span><br>
		</div>

		<div class="content1">
			<input type="text" placeholder="Enter User Name" name="user_name" class="input" >
				<span class="error"><?php echo $Usernameerr;?></span>
			</div>
			<hr class="hr_tag">
			</div>

			<div class="second_inputs">
			<div class="content">
			<input type="password" placeholder="Enter Password" name="password" class="input">
				<span class="error"><?php echo $passworderr;?></span>
			</div>
			
			<div class="content">
				<input type="password" class="input" placeholder="Confirm Password" name="rpassword">
				<span class="error"><?php echo $rpassworderr;?></span>
			</div>
			<hr class="hr_tag">
		</div>
		<div class="content_gender">
			<label class="label">Gender</label><br>
			<div class="gender_input">
			 <input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="other">Other
		<span class="error">
	 		<?php echo $gendererr;?>
	 	</span>
	 	</div><br>
		</div>

		<div class="content">
			<label class="label">Date Of Birth</label><br>
			 <input type="date" name="dob" class="input_dob" value="<?php echo $dob;?>">
      <span class="error"><?php echo $doberr;?></span><br>
		</div>


		<div class="submit_content">
		
			<input type="submit" name="saveUser" value="Submit" class="submit_button" n>
			
		</div>

		</div>
	</form>
	

	</div>

<?php require 'fotter/Footer.php';?>


</body>
</html>