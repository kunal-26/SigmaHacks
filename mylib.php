<?php

$cn=mysqli_connect("localhost","id14460988_google","Kunal@26082608","id14460988_sigma");
if(!$cn)
{
	echo "unable to conect";
	die();
}
function check_photo($enrollmentno)
{
	global $cn;
	$sql="Select * from photodata where enrollmentno='$enrollmentno'";
	$result=mysqli_query($cn,$sql);
	$n=mysqli_num_rows($result);
	$photo="no";
	if($n>0)
	{
		$rw=mysqli_fetch_array($result);
		$photo=$rw["photo"];
	}
	return $photo;
}

function countmystudents()
{
	global $cn;
	$sql="select * from logindata where usertype='student'";
	$result=mysqli_query($cn,$sql);
	$n=mysqli_num_rows($result);
	return $n;
}
function countmyemployee()
{
	global $cn;
	$sql="select * from logindata where usertype='employee'";
	$result=mysqli_query($cn,$sql);
	$n=mysqli_num_rows($result);
	return $n;
}
function seat($enrollmentno)
{
	global $cn;
	$sql="Select * from seat where enrollmentno='$enrollmentno'";
	$result=mysqli_query($cn,$sql);
	$n=mysqli_num_rows($result);
	$seatno="no";
	if($n>0)
	{
		$rw=mysqli_fetch_array($result);
		$seatno=$rw["seatno"];
	}
	return $seatno;
}
function countseat()
{
	global $cn;
	$sql="select * from seat";
	$result=mysqli_query($cn,$sql);
	$n=mysqli_num_rows($result);
	return $n;
}
function countmypatient()
{
	global $cn;
	$sql="select * from logindata where usertype='patient'";
	$result=mysqli_query($cn,$sql);
	$n=mysqli_num_rows($result);
	return $n;
}
function countmynodal()
{
	global $cn;
	$sql="select * from logindata where usertype='officer'";
	$result=mysqli_query($cn,$sql);
	$n=mysqli_num_rows($result);
	return $n;
}

?>