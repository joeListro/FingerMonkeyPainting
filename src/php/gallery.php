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
						<li><a href="../images/tmp.jpg" title="Image1" rel="colorbox"><img src="../images/tmp.jpg" alt="Image1"/></a></li>
						<li><a href="../images/tmp2.jpg" title="Image2" rel="colorbox"><img src="../images/tmp2.jpg" alt="Image2"/></a></li>
						<li><a href="../images/tmp3.jpg" title="Image3" rel="colorbox"><img src="../images/tmp3.jpg" alt="Image3"/></a></li>
						<li><a href="../images/tmp4.jpg" title="Image4" rel="colorbox"><img src="../images/tmp4.jpg" alt="Image4"/></a></li>
						<li><a href="../images/tmp5.jpg" title="Image5" rel="colorbox"><img src="../images/tmp5.jpg" alt="Image5"/></a></li>
						<li><a href="../images/tmp6.jpg" title="Image6" rel="colorbox"><img src="../images/tmp6.jpg" alt="Image6"/></a></li>
						<li><a href="../images/tmp7.jpg" title="Image7" rel="colorbox"><img src="../images/tmp7.jpg" alt="Image7"/></a></li>
						<li><a href="../images/tmp8.png" title="Image8" rel="colorbox"><img src="../images/tmp8.png" alt="Image8"/></a></li>
						<li><a href="../images/tmp9.png" title="Image9" rel="colorbox"><img src="../images/tmp9.png" alt="Image9"/></a></li>
						<li><a href="../images/tmp10.jpg" title="Image10" rel="colorbox"><img src="../images/tmp10.jpg" alt="Image10"/></a></li>
						<li><a href="../images/tmp11.jpg" title="Image11" rel="colorbox"><img src="../images/tmp11.jpg" alt="Image11"/></a></li>
                    </ul>
            </div>
	
	
</div>';

include("../include/footer.inc");
?>
