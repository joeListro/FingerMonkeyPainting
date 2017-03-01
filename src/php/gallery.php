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
            <a class="navbar-brand" href="#">LadderMonkeyPainting</a>
            <ul class="nav navbar-nav">
                <li><a href="../index.php">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="./about.php">About/Contact</a></li>
                <li class="active"><a href="./gallery.php">Gallery</a></li>
                <li><a href="./schedule.php">Scheduling</a></li>
                <li><a href="./employees.php">Meet the Team</a></li>
            </ul>
        </nav> 
        <!--end nav bar-->

        <h1>Gallery</h1>
    </div>
	
	    <div id="galleryListWrapper">
                    <ul id="galleryList" class="clearfix">
                    <li><a href="gallery-images/4488826_6f061c99ec_b_d.jpg" title="Image1" rel="colorbox"><img src="../images/tmp.jpg" alt="Image1"/></a></li>
                    <li><a href="gallery-images/4488826_6f061c99ec_b_d.jpg" title="Image2" rel="colorbox"><img src="../images/tmp3.jpg" alt="Image2"/></a></li>
                    <li><a href="gallery-images/4488826_6f061c99ec_b_d.jpg" title="Image3" rel="colorbox"><img src="../images/tmp2.jpg" alt="Image3"/></a></li>
                                                 
                    </ul>
            </div>
	
	
</div>';

include("../include/footer.inc");
?>
