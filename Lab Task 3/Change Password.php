<?php 

		require 'controller/check change password.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Change password
	</title>
	<link rel="stylesheet" type="text/css" href="css/change password_style.css">
</head>
<body>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<div class="wraper">

				<div class="header">
      <label>CHANGE PASSWORD</label>
      <hr class="hr_tag">
    </div>

			<div class="Content">
				<label>Current Password</label>
				<input type="password" name="current_password" class="input_holder" >	
				<span class="error"><?php echo $current_passwordErr;?></span>
			</div>

			<div class="Content">
				<label>New Password</label>
				<input type="password"class="input_holder" name="new_password">
				<span class="error"><?php echo $new_passwordErr;?></span>
			</div>

			<div class="Content">
				<label>Confirm Password</label>
				<input type="password" class="input_holder" name="retype_new_password">
				<span class="error"><?php echo $retype_new_passwordErr;?></span>
			</div>

			<div class="submit_content">
			<input type="submit" name="submit" value="Change password" class="submit_button">
		</div>
		</div>
</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>