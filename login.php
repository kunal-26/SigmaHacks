<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Covid Quarantine Portal</title>
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/javascript" href="login.js">


</head>

<body>
<form action="checklogin.php" method="post" >

<canvas id="dotty" width="100%" height="1600px"></canvas>
<div class="login-box">
  <h2>Quarantine Centre Login</h2>
  <form>
    <div class="user-box">
	<input name="t1" type="text"  required=""/>
	    	      
      <label>Username</label>
	
    </div>
    <div class="user-box">
      
    <input name="t2" type="password"  required=""/>
      <label>Password</label>

    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input  name="b1" type="submit" value="Log In" />
    </a>
  </form>
</div>
</body>
</html>