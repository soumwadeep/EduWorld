<?php

session_start();

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Welcome <?php echo $_SESSION['username']; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/logoicont.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<h1><a href="#" class="logo">EW</a></h1>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="studentdashboard.php"><span class="fa fa-home"></span> Home</a>
          </li>
          <li>
              <a href="studentresource.php"><span class="fa fa-book"></span> Resource</a>
          </li>
          <li>
            <a href="studentclass.php"><span class="fa fa-desktop"></span> Class</a>
          </li>
          <li>
              <a href="studenthomework.php"><span class="fa fa-pencil-square"></span> Homework</a>
          </li>
          <li>
            <a href="studentresult.php"><span class="fa fa-bookmark"></span> Result</a>
          </li>
          <li class="active">
            <a href="#"><span class="fa fa-money"></span> Fees</a>
          </li>
          <li>
            <a href="studentcontact.php"><span class="fa fa-comment"></span> Contact</a>
          </li>
          <li>
            <a href="login.php"><span class="fa fa-sign-out"></span> Sign Out</a>
          </li>
        </ul>
        <div class="footer">
        	<p>
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Edu World.
					</p>
        </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <p style="color: black;"><b>Welcome <?php echo $_SESSION['username']; ?></b></p>
          </div>
        </nav>

        <h2 class="mb-4">Fees</h2>
        <p style="color: black;"><b>This Is Your Fees Section.Here You Will Find The Information Of Due Fees And Payment Page Of Your Due Fees.</b></p>
        <p><b>Due Fees:</b>July 2021</p>
        <p>Pay Here:</p>
        <iframe src="https://rzp.io/l/EduWorldFees" style="width:100%; height:600px; border:0;">Loading…</iframe>
      </div>
		</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>