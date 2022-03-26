<?php
$servername= "localhost";
$username = "root";
$password = "";
$dname = "db0911";

//create connection
$conn = new mysqli($servername, $username, $password, $dname);

//check connection
if($conn->connect_error) { 
die("Connection failed:".$conn->connect_error);
}
else { 
echo "connection done";
echo "<br>";
}

if (isset($_REQUEST['submit'])!='')
{
$name=$_POST["username"];
$pwd=$_POST["pwd"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$age=$_POST["age"];
echo"<br>";
$sql="INSERT INTO tr0911 (username,pwd,email,gender,age) VALUES ('$name','$pwd','$email','$gender','$age')";

if (mysqli_query($conn,$sql))
{
echo "new record inserted";
}
else
{
echo mysqli_error($conn);
}
mysqli_close($conn);
}
?>

<html> 
<head>
<title>PHP Form Validation (using connection) </title>
<style>
	.container {
		width : 300px;
		margin : 0 auto;
	}
	body
	{
		width: 1500px;
		height:600px;
		background-repeat:no-repeat;
		background-image: url('bg1.jpg');
	}
</style>
</head>
<body>
	<center>
		<div class="container">
		<h1>PHP FORM VALIDATION AND CONNECTION </h1> <br><br>
		<h2>By - Mahim Kapoor (N220)</h2>
<form method="post" action="mahim.php"> 
Name : 
<input type="text" name="username">
<br><br>

Password : 
<input type="pwd" name="pwd">
<br><br>

Age : 
<input type="number" name="age">
<br><br>

E-mail : 
<input type="email" name="email">
<br><br>

Gender : 
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="other"> others
<br><br>

Agree to terms of service : 
<input type="checkbox" name="agree"> <br><br>

Submit Your Form :
<input type="submit" name="submit">
<br><br>
</div>
	</center>
</form>
</body>
</html>

