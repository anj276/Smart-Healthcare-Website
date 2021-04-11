<?php
$dt_1=$_POST["dt_1"];
$dt_2=$_POST["dt_2"];
$dept=$_POST["dept"];
$doctors=$_POST["doctors"];
$name=$_POST["name"];
$phno=$_POST["phno"];
$email_id=$_POST["email_id"];

$conn=mysqli_connect("localhost","root","","testdb");
if(!$conn)
{
	echo"<br>problem";
}
else
{
	$query="INSERT INTO registration(pick_dt,suitable_dt,department,doctors,name,phone_no,email_id)VALUES('$dt_1','$dt_2','$dept','$doctors','$name','$phno','$email_id')";
	$res=mysqli_query($conn,$query);
	if($res)
	{
		echo"appoinment set successsfully";
	}
	mysqli_close($conn);
}
?>
