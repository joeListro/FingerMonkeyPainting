<?php
include("./include/header.inc");
echo 'LadderMonkeyPainting Home';
include("./include/header2_index.inc");
// header2 includes <body> tag, footer includes </body>

//add in title
echo '
<div class="container">
    <div class="jumbotron">

        <!--Start Nav Bar-->
        <nav class="navbar navbar-default navbar-fixed-top">
			<a id="logo" class="pull-left"><img src="./images/logo.jpg"></a>
            <a class="navbar-brand" href="#">LadderMonkeyPainting</a>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="./php/about.php">About/Contact</a></li>
                <li><a href="./php/gallery.php">Gallery</a></li>
                <li><a href="./php/schedule.php">Scheduling</a></li>
                <li><a href="./php/employees.php">Meet the Team</a></li>
            </ul>
        </nav>
        <!--end nav bar-->

		<img class="pull-left" id="jumbo_image" src="./images/logo-jumbo.jpg">


        <div class="container">
            <h1 id="jumbo_title1">Ladder Monkey Painting</h1>
            <p id="jumbo_title2">A Burlington based painting business.</p>
        </div>

    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
            	<img class="carousel-image" src="./images/monkey.jpg" alt="monkey">
            </div>

            <div class="item">
            	<img class="carousel-image" src="./images/tmp6.jpg" alt="def not cat">
            </div>

            <div class="item">
            	<img class="carousel-image" src="./images/tmp7.jpg" alt="nocat">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>';

include("./include/footer.inc");
?>
