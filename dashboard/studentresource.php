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
          <li class="active">
              <a href="#"><span class="fa fa-book"></span> Resource</a>
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
          <li>
            <a href="studentfees.php"><span class="fa fa-money"></span> Fees</a>
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

        <h2 class="mb-4">Resource</h2>
        <p style="color: black;"><b>This Is Your Resource Section.Here You Will Find All Your Study Materials.</b></p>
        <p>Just Click On Any Material And It Will Automatically Open It In An Enlarged Size In A New Tab For Better Visibility.</p>
        <p><b>Class 12 Physics-1 NCERT Full Book:</b></p>
        <iframe src="https://drive.google.com/embeddedfolderview?id=1EoKgJnX28HdGOpPZ7DDAszfs_FlW9u-O#grid" style="width:100%; height:600px; border:0;"></iframe>
        <p><b>Class 12 Chemistry-1 NCERT Full Book:</b></p>
        <iframe src="https://drive.google.com/embeddedfolderview?id=1u04_258899Q6pm1JkSppbtngaWNxSDg4#grid" style="width:100%; height:600px; border:0;"></iframe>
        <p><b>Class 12 Mathematics-1 NCERT Full Book:</b></p>
        <iframe src="https://drive.google.com/embeddedfolderview?id=1tPicXQbUFVYYkveeUU77KZuHrRiHpuhv#grid" style="width:100%; height:600px; border:0;"></iframe>
        <p><b>Class 12 English Flamingo NCERT Full Book:</b></p>
        <iframe src="https://drive.google.com/embeddedfolderview?id=1ty83ikTym6juwOfvRolzzHkHgX0L6R_h#grid" style="width:100%; height:600px; border:0;"></iframe>
        <p><b>Class 12 English Vistas NCERT Full Book:</b></p>
        <iframe src="https://drive.google.com/embeddedfolderview?id=1uszKK1PVDc7gkHBBPMab2lGmVkW9r2_9#grid" style="width:100%; height:600px; border:0;"></iframe>
      </div>
		</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>