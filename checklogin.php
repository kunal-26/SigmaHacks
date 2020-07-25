<?php
$enrollmentno=$_POST["t1"];
$password=$_POST["t2"];


$cn=mysqli_connect("localhost","id14460988_google","Kunal@26082608","id14460988_sigma");
if(!$cn)
	{
	 echo "unable to connect database";
	 die();
	}
	
	$sql="select * from logindata where enrollmentno=$enrollmentno AND password='$password'";
	$result=mysqli_query($cn,$sql);
	$n=mysqli_num_rows($result);
	if($n==1)
		{
			$rw=mysqli_fetch_array($result);
			$ut=$rw["usertype"];
			session_start();
			$_SESSION["enrollmentno"]=$enrollmentno;
			$_SESSION["usertype"]=$ut;
			
			if($ut=="admin")
			{
				header("Location:adminhome.php");
				die();
			}
			else if($ut=="patient")
			{
				header("Location:dashboard.php");
				die();
			}
			else if($ut=="officer")
			{
				header("Location:nodal.php");
				die();
			}
			
			else 
			{
				header("Location:usertypeerror.php");
				die();
			}
			
		}
		else 
			{
				header("Location:loginerror.php");
				die();
			}

?>