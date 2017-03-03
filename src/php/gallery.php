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
			<a id="logo" class="pull-left"><img src="../images/logo.jpg"></a>
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
                    <li><a title="Image1" rel="colorbox"><img src="../images/gallery1.jpg" alt="Image1"/></a></li>
                    <li><a title="Image2" rel="colorbox"><img src="../images/gallery2.jpg" alt="Image2"/></a></li>
                    <li><a title="Image3" rel="colorbox"><img src="../images/gallery3.jpg" alt="Image3"/></a></li>
                    <li><a title="Image1" rel="colorbox"><img src="../images/gallery4.jpg" alt="Image1"/></a></li>
                    <li><a title="Image2" rel="colorbox"><img src="../images/gallery5.jpg" alt="Image2"/></a></li>
                    <li><a title="Image3" rel="colorbox"><img src="../images/gallery6.jpg" alt="Image3"/></a></li>
                    <li><a title="Image1" rel="colorbox"><img src="../images/gallery7.jpg" alt="Image1"/></a></li>
                    <li><a title="Image2" rel="colorbox"><img src="../images/gallery8.jpg" alt="Image2"/></a></li>
                    <li><a title="Image3" rel="colorbox"><img src="../images/gallery9.jpg" alt="Image3"/></a></li>
                                                 
                    </ul>
            </div>
	
	
</div>';

include("../include/footer.inc");
?>
