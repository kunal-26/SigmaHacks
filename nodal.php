<?php 
session_start();
if(!isset($_SESSION["usertype"]))
{
	header("location:autherror.php");
	die();
}
$ut=$_SESSION["usertype"];
$e1=$_SESSION["enrollmentno"];
if($ut!="officer")
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
$sql="select * from nodaldata where enrollmentno='$e1'";

//Fetch data
$result=mysqli_query($cn,$sql);

//Check number of rows
$n=mysqli_num_rows($result);

if($n>0)
{
	//show data
	$rw=mysqli_fetch_array($result);
	$a=$rw["name"];
	
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
          <a class="nav-link" href="nodal.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        

		

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="nodalprofile.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Profile</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Components</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="shownodalfeedback.php">Feedback</a>
            </li>
            
            <li>
              <a href="showroutine.php">Routine Feddback</a>
            </li>
            <li>
              <a href="shownodalquery.php">Query</a>
            </li>
          </ul>
        </li>
        
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="addpatient2.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Add patient</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="shownodalpatient.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Show patient</span>
          </a>
        </li>


		 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="nodalentertainment.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Entertainment</span>
          </a>
        </li>


            </li>
          </ul>
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
       <?php 
require_once("mylib.php");
$ta=countmypatient();
$tb=countmynodal();
?>  

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5"><?php echo $tb; ?> Quarantine Centers</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
               
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
              
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5"><?php echo $ta; ?> Total Patients</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              
            </a>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> COVID-19 Statistic</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
          <div style="padding:40px 20px"> 
<a href="https://covid-19livetracker.blogspot.com/" target="_blank" class="topicUrl">
    <div class="day-date">
      <p class="update-info">Last Updated: <span id="para1"></span></p>
    </div>
  </a>
    <div class="corona-india">
    <a href="https://covid-19livetracker.blogspot.com/" target="_blank" class="topicUrl">
      <div class="columns">
        <div class="corona-col logo">
          <div class="virus-logo">
            <img src="https://1.bp.blogspot.com/-x-6F5iox2fk/XoYUiWMibDI/AAAAAAAAGsw/xi9rEJ5qLBk5nvJkbcwJHYSZstzhTSDKwCPcBGAYYCw/s1600/virus-logo.webp" />
          </div>
          <img class="corona-logo" src="https://1.bp.blogspot.com/-FjTAau38hZQ/XoYFFrjtq_I/AAAAAAAAGsk/r_xT-CeoeYQeN22Sby_x2WVE0ZiExV0rACPcBGAYYCw/s1600/corona-india-logo.png" />
        </div>
        <div class="corona-col ">
          <div class="height-100">
            <div class="cases-count">
              <div class="total-cases">
                <h5>Total Cases</h5>
                <h1 id="totalCases"></h1>
              </div>
              <div class="recovered-cases">
                <h5>Recovered</h5>
                <h1 id="recovered"></h1>
              </div>
              <div class="death-cases">
                <h5>Deaths</h5>
                <h1 id="death"></h1>
              </div>
            </div>

          </div>

        </div>
      </div>
      <div class="state-count">
        <div class="marquee" id="stateCount">
        </div>
      </div>
      </a>
      <div class="helpline" id="helpline">
        <p>Central Helpline Number for CoronaVirus: <a href="tel:+91-11-23978046" target="_blank">+91-11-23978046</a></p>
        <span>|</span>
        <p>Helpline Email ID: <a href="mailto:ncov2019@gov.in" target="_blank">ncov2019@gov.in</a> or <a href="mailto:ncov2019@gmail.com" target="_blank">ncov2019@gmail.com</a></p>
      </div>
    </div>
</div>
<link href="https://fonts.googleapis.com/css?family=Cambay:400,700&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,900&amp;display=swap" rel="stylesheet" />

        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

            <!-- Example Social Card-->
            <!-- Example Social Card-->
        
      <!-- Example DataTables Card-->
          <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
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