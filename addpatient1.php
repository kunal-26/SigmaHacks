<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Covid Quarantine Portal</title>
</head>

<body>
<?php

 if(isset($_POST["b1"]))
 {
	 
	$enrollmentno=$_POST["t9"];
	$name=$_POST["t2"];
	$email=$_POST["t1"];
	$adhaar=$_POST["t3"];
	$quarantine=$_POST["t4"];
	
	$password=$_POST["t7"];
	$usertype="patient";
        

$cn=mysqli_connect("localhost","id14460988_google","Kunal@26082608","id14460988_sigma");
	
	if(!$cn)
	{
		echo "unable to connect";
		die();
	}
	
	$q1="insert into patientdata (enrollmentno,name,email,adhaar,quarantine,password)
	 values
	($enrollmentno,'$name','$email','$adhaar','$quarantine','$password')";
    $q2="insert into logindata values($enrollmentno,'$password','$usertype')";
	$n1=mysqli_query($cn,$q1);
	$n2=mysqli_query($cn,$q2);
	$msg="Error";
	if($n1==1 && $n2==1)
 	{
		?>
                    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #0f0f0f;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
        background-color: green;
      }
    </style>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Welcome new Patient</h1>
        <h3>Login created</h3>
        <h3><a href="addpatient.php">Continue</a></h3> 
      </div>
	<?php
	 
	}
	
   	else if($n1==1)
	{
		 ?>
		                    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #0f0f0f;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: red;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
        background-color: red;
      }
    </style>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✘</i>
      </div>
        <h1>Data Saved but Login is pending</h1>
        <h3><a href="addepatient.php">Continue</a></h3> 
      </div>

      <?php

	}
	else if($n2==1)
	{	
	?>
		<style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #0f0f0f;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: red;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
        background-color: red;
      }
    </style>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✘</i>
      </div>
        <h1>Login Created but Data is not Saved</h1>
        <h3><a href="addpatient.php">Continue</a></h3> 
      </div>
	<?php
	}
	
?>


 <?php
 
    }
	else
	{
 
 
 ?>
   <h3><a href="addpatient.php">Form Fill</a></h3>
     

<?php	 
}  
?>





</body>
</html>