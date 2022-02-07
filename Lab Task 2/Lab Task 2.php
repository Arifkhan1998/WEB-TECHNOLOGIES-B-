<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $dateofbirth = $gender = $degree= $bloodgroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $dateofbirth = test_input($_POST["dateofbirth"]);
  $gender = test_input($_POST["gender"]);
  $degree = test_input($_POST["degree"]);
  $bloodgroup = test_input($_POST["bloodgroup"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Code Practice</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Date Of Birth: <input type="date" name="Date of Birth">

  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other

  <br><br>
  Degree:
  <input type="radio" name="degree" value="SSC">SSC
  <input type="radio" name="degree" value="HSC">HSC
  <input type="radio" name="degree" value="BSC">BSC
  <input type="radio" name="degree" value="MSC">MSC

  <br><br>

  Blood Group:
  <label for="blood Group"></label>
<select name="bloodgroup" id="bloodgroup">
	<option value="">--- Choose a Blood Group ---</option>
	<option value="a+">A+</option>
	<option value="a-">A_</option>
	<option value="b+">B+</option>
    <option value="o+">O+</option>
    <option value="ab+">AB+</option>
    <option value="ab-">AB-</option>
    <option value="o">O-</option>
    

  <br>
  <br>

  <input type="submit" name="submit" value="Submit">  
  <</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dateofbirth;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo $bloodgroup
?>

</body>
</html>