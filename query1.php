<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

 if(isset($_POST["b1"]))
 {
	 
	$enrollmentno=$_POST["t1"];
	$quarantine=$_POST["t2"];
	$name=$_POST["t3"];
	$email=$_POST["t4"];
	$query=$_POST["t5"];
	
	$usertype="patient";
        
	
$cn=mysqli_connect("localhost","id14460988_google","Kunal@26082608","id14460988_sigma");
	
	if(!$cn)
	{
		echo "unable to connect";
		die();
	}
	
	$sql="insert into query (enrollmentno,quarantine,name,email,query)
	 values
	($enrollmentno,'$quarantine','$name','$email','$query')";
    
	$n=mysqli_query($cn,$sql);
	$msg="Error";
	if($n==1)
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
        <h1>Query Submitted</h1>
        
        <h3><a href="query.php">Continue</a></h3> 
      </div>
	<?php
	 
	}
	?>

	


 <?php
 
    }
	else
	{
 
 
 ?>
   <h3><a href="query.php">Form Fill</a></h3>
     

<?php	 
}  
?>





</body>
</html>