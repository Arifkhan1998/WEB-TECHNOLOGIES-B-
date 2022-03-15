
<?php 
session_start();
if (isset($_SESSION['user_name']))
  {header("location:public.php");}
else
  {require 'head/top.php';}
  require 'controller/check Login.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login_Style.css">
</head>
<body>

    <form class="wraper" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

		<div class="header">
      <label class="thick">Accountant   Login</label>
      <hr class="hr_tag">
    </div>
		<div>
			<div class="Content">
			<input type="text" placeholder="Enter User Name" name="user_name" class="input_holder" value="<?php if(isset($_COOKIE['user_name'])) {echo $_COOKIE['user_name'];} ?>" >
				<span class="error"><?php echo $Usernameerr;?></span>
			</div>

			<div class="Content">
			<input type="password" placeholder="Enter Password" name="password" class="input_holder" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>">
				<span class="error"><?php echo $passworderr;?></span>
			</div>

      <div class="checker_content">
        <input type="checkbox" name="remember" <?php if(isset($_COOKIE['user_name'])) {echo "checked";} ?>><span>Rember Me</span>
      </div>
			<div class="submit_content">
			<input type="submit" name="submit" value="Login" class="submit_button">
		</div>
    <div class="link_text">
     <span>Dont have account?</span><a href="registration.php" class="forget_password">Sign Up</a>
    </div>
    <div class="link_text">
     <a href="forget password.php" class="forget_password">Forget password?</a>
		</div>
</form>
</div>
<?php require 'fotter/Footer.php';?>
</body>
</html>