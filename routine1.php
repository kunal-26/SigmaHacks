<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="congratulations.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Covid Quarantine Portal</title>
</head>
<body>
<?php

 if(isset($_POST["b1"]))
 {
	 
	$enrollmentno=$_POST["t1"];
	$quarantine=$_POST["t8"];
	$food=$_POST["t2"];
	$medicines=$_POST["t3"];
	$doctor=$_POST["t4"];
	$environment=$_POST["t5"];
	$overall=$_POST["t6"];
	
	        

$cn=mysqli_connect("localhost","id14460988_google","Kunal@26082608","id14460988_sigma");
	
	if(!$cn)
	{
		echo "unable to connect";
		die();
	}
	
	$q1="insert into routine (enrollmentno,quarantine,food,medicines,doctor,environment,overall) 
	values('$enrollmentno','$quarantine','$food','$medicines','$doctor','$environment',
	'$overall')";
    $n1=mysqli_query($cn,$q1);
    
	$msg="Error:can not save data";
	if($n1==1)
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
        <h1>Success</h1> 
      </div>

        <?php
	 
	 
	 
	}
	
   	else
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
        <h1>Unsuccessful</h1> 
      </div>
		<?php
		 
		$msg="Sorry, Your Submission can't takes place";


	}
?>
		
    </p>
    <a href="dashboard.php" id="contBtn">Continue</a><br/>
 
 
    
    
     

 <?php
 
    }
	else
	{
 
 
 ?>
   <h3><a href="dashboard.php">Form Fill</a></h3>
     

<?php	 
}  
?>





</body>
</html>