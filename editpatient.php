<?php 
session_start();
if(!isset($_SESSION["usertype"]))
{
	header("location:autherror.php");
	die();
}
$ut=$_SESSION["usertype"];
$e1=$_SESSION["enrollmentno"];
if($ut!="patient")
{
	header("location:autherror.php");
	die();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Covid Quarantine Portal</title>
<link rel="stylesheet" type="text/css" href="home1.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/css/dataTables.bootstrap4.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="coo.css"/>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
<script type="text/javascript" src="coo.js"></script>

<script type="text/javascript" src="home1.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/js/dataTables.bootstrap4.js"></script>


</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">COVID-19</a>
      <?php 

$cn=mysqli_connect("localhost","id14460988_google","Kunal@26082608","id14460988_sigma");
if(!$cn)
{
	echo "Unable to connect";
	die();
}
$sql="select * from patientdata where enrollmentno='$e1'";

//Fetch data
$result=mysqli_query($cn,$sql);

//Check number of rows
$n=mysqli_num_rows($result);

if($n>0)
{
	//show data
	$rw=mysqli_fetch_array($result);
	$a=$rw["name"];
	$b=$rw["quarantine"];
	?>
	<p>
    	<h3 style="color:#00F;"><?php echo $a; ?> <br/></h3>
		
	</p>
    <?php
	
}
else
{
	?>
	<h2>No data found</h2>
	<?php
}
?>

   <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="profile.php">
            <i class="fa fa-fw fa-connectdevelop"></i>
            <span class="nav-link-text">Profile</span>
          </a>
        </li>


        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="feedback.php">
            <i class="fa fa-fw fa-comment"></i>
            <span class="nav-link-text">Feedback</span>
          </a>
        </li>
        
        
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="query.php">
            <i class="fa fa-fw fa-question"></i>
            <span class="nav-link-text">Query</span>
          </a>
        </li>



        
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="patiententertainment.php">
            <i class="fa fa-fw fa-music"></i>
            <span class="nav-link-text">Entertainment</span>
          </a>
        </li>
      
      
      
              
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="routine.php">
            <i class="fa fa-fw fa-calendar"></i>
            <span class="nav-link-text">Routine Check Up</span>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <a href="profile.php">
            <i class="fa fa-fw fa-sign-out"></i>My Profile</a></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <a href="logout.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a></a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">100 Quarantine Centers</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">100 Doctors</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">500 Medical Staff</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">100 Nodal Officers</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
            <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i>Feedback</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
          <div style="padding:40px 20px"> 
       <h2>Edit Details	</h2>
    
    
    
<?php 
$ut=$_SESSION["usertype"];
$e1=$_SESSION["enrollmentno"]; 

$cn=mysqli_connect("localhost","id14460988_google","Kunal@26082608","id14460988_sigma");
if(!$cn)
{
	echo "unable to conenct";
	die();
}
$sql="select * from patientdata where enrollmentno='$e1'";
$result=mysqli_query($cn,$sql);
$n=mysqli_num_rows($result);
if($n==1)
{
	$rw=mysqli_fetch_array($result);
	$a=$rw["enrollmentno"];
	$b=$rw["name"];
	$e=$rw["email"];
	$f=$rw["adhaar"];
	
	?>
	
		<form id="form1" name="form1" method="post" action="editpatient1.php">
		  
<table style="border-collapse: separate;
    border-spacing: 0 1em;"><tr>
          <th style="color:#000; font-family:'Comic Sans MS', cursive">
          Enrollment no : </th><td><input readonly value="<?php echo $a; ?>" type="text"
           name="t1" id="t1" /></td></tr>
           <tr>
           <th style="color:#000; font-family:'Comic Sans MS', cursive"> 
		  Name : </th><td><input value="<?php echo $b; ?>" type="text" name="t2" id="t2" /></td></tr>
		  <tr>
           <th style="color:#000; font-family:'Comic Sans MS', cursive"> 
		  
          E-mail : </th><td><input value="<?php echo $e; ?>" type="text" name="t3" id="t3" pattern="^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$" required /> 
		</td></tr>
        <tr>
           <th style="color:#000; font-family:'Comic Sans MS', cursive"> 
		  
        Adhaar No. : </th><td><input value="<?php echo $f; ?>" type="text" name="t4" id="t4"
         pattern="[0-9]{1}[0-9]{12}" required />  
	</td></tr> 
		  
		  <p style="color:#000"><input type="submit" name="b1" id="b1" value="Save Changes" /> </p>
		</table>
		</form>
        <?php
}
else
{
	?>
	<h3>Error : No data found, try again</h3>
    <h4><a href="profile.php">Continue...</a></h4>
	<?php
}
?>
<p>&nbsp;</p>
		
	</p>

    
    
    
    
</div>
</div>
</div>
</div>
</div>

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    
</body>


</html>