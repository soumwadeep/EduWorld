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
          <li class="active">
            <a href="#"><span class="fa fa-home"></span> Home</a>
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

        <h2 class="mb-4">Home</h2>
        <p style="color: black;"><b>This Is Your Home Page.Here You Will Find All The Recommended Instructions To Do.</b></p>
        <p>Follow This Instructions To Stay Updated And Never Miss Anything!</p>
        <ul>
          <li>Visit The <b>"Resource Section"</b> Regularly To Get All The Notes,Books,Important Questions,Syllabus,Admit Card,Previous Year Question Papers,Sample Question Paper,etc.</li>
          <li>Visit The <b>"Class Section"</b> Regularly To Know About Your Ongoing,Upcoming Or Recorded Lectures And Join Accordingly.</li>
          <li>Visit The <b>"Homework Section"</b> Regularly To Get All Your Assignments And Submit Your Assignments Accordingly.</li>
          <li>Visit The <b>"Result Section"</b> Regularly To Get Your Marks Or Marksheet Of Your Exams Or Assignments.</li>
          <li>Visit The <b>"Fees Section"</b> To Know About Your Due Fees Of Any Course And Pay The Fees Accordingly.</li>
          <li>Visit The <b>"Contact Section"</b> To Ask Your Any Doubt Directly To Your Teacher Or Mentor.</li>
          <li>Click On<b>"Sign Out"</b> To Log Out And Go Back To Login Page.</li>
        </ul>
      </div>
		</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>