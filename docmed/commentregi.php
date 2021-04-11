<?php
$cmt=$_POST["comment"];
$name=$_POST["name"];
$email_id=$_POST["email"];
$website=$_POST["website"];
$conn=mysqli_connect("localhost","root","","testdb");
if(!$conn)
{
	echo"<br>problem";
}
else
{
	$query="INSERT INTO commentregi(comment,name,email,website)VALUES('$cmt','$name','$email_id','$website')";
	$res=mysqli_query($conn,$query);
	if($res)
	{
		echo"comment set successsfully";
	}
	mysqli_close($conn);
}
?>
