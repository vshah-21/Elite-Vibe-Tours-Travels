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
$signup=$_POST["signup"];
echo"<br>";
$sql="INSERT INTO signuptable (signup) VALUES ('$signup')";

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