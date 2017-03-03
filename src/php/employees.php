<?php
include("../include/header.inc");
echo 'About/Contact LadderMonkeyPainting';
include("../include/header2.inc");
// header2 includes <body> tag, footer includes </body>


//add in title
echo '
<div class="container"> 
    <div class="jumbotron">

        <!--Start Nav Bar-->
        <nav class="navbar navbar-default navbar-fixed-top">
			<a id="logo" class="pull-left"><img src="../images/logo.jpg"></a>
            <a class="navbar-brand" href="#">LadderMonkeyPainting</a>
            <ul class="nav navbar-nav">
                <li><a href="../index.php">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="./about.php">About/Contact</a></li>
                <li><a href="./gallery.php">Gallery</a></li>
                <li><a href="./schedule.php">Scheduling</a></li>
                <li class="active"><a href="./php/employees.php">Meet the Team</a></li>
            </ul>
        </nav> 
        <!--end nav bar-->
		
		<a id="logo" class="pull-left"><img src="../images/logo-jumbo.jpg"></a>

        <h1>Meet the Team</h1>
    </div>
	
	<div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="../images/owner.jpg" alt="John Clark" width="140" height="140">
          <h2>John Clark</h2>
		  <p>Owner</p>
          <p><a class="btn btn-default" href="./about.php" role="button">Contact Me</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../images/employee1.jpg" alt="Zach Denis" width="140" height="140">
          <h3>Zach Denis</h3>
          <p>Painter / Graphic Design</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../images/employee2.jpg" alt="Alex Good" width="140" height="140">
          <h3>Alex Good</h3>
          <p>Painter / Marketing</p>
        </div>
      </div>
	  <div class="row">
		<div class="col-lg-4">
			
		</div>
		<div class="col-lg-4">
		<img class="img-circle" src="../images/employee3.jpg" alt="George Bischoff" width="140" height="140">
			<h3>George Bischoff</h3>
			<p>Painter</p>
		</div>
		<div class="col-lg-4">
		<img class="img-circle" src="../images/employee4.jpg" alt="Louis the Cat" width="140" height="140">
			<h3>Louis</h3>
			<p>Cat</p>
		</div>
	  </div>
</div>';

include("../include/footer.inc");
?>
