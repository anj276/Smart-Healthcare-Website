<?php
$dept=$_POST["dept"];
$section=$_POST["section"];
$name=$_POST["name"];
$dob=$_POST["dob"];
$phno=$_POST["phno"];


$conn=mysqli_connect("localhost","root","","testdb");
if(!$conn)
{
	echo"<br>problem";
}
else
{
	$query="INSERT INTO bedregistrtion(department,section,name,dob,phone_no)VALUES('$dept','$section','$name','$dob','$phno')";
	$res=mysqli_query($conn,$query);
	if($res)
	{
		echo"registration set successsfully";
	}
	mysqli_close($conn);
}
?>
