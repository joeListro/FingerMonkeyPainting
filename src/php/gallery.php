<?php
include("../include/header.inc");
echo 'About/Contact LadderMonkeyPainting';
include("../include/header2.inc");
// header2 includes <body> tag, footer includes </body>

//testing

//add in title
echo '
<script src="../common/js/lightbox.js"></script>
<div class="container">
    <div class="jumbotron">

        <!--Start Nav Bar-->
        <nav class="navbar navbar-default navbar-fixed-top">
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

		<img class="pull-left" id="jumbo_image" src="../images/logo-jumbo.jpg">

        <h1 id="jumbo_title1">Gallery</h1>
    </div>

	   <!-- <div id="galleryListWrapper">
                    <ul id="galleryList" class="clearfix">
						<li><a href="../images/gallery/gallery1.jpg" title="Image1" rel="colorbox"><img src="../images/gallery/gallery1.jpg" alt="Image1"/></a></li>
						<li><a href="../images/gallery/gallery2.jpg" title="Image2" rel="colorbox"><img src="../images/gallery/gallery2.jpg" alt="Image2"/></a></li>
						<li><a href="../images/gallery/gallery3.jpg" title="Image3" rel="colorbox"><img src="../images/gallery/gallery3.jpg" alt="Image3"/></a></li>
						<li><a href="../images/gallery/gallery4.jpg" title="Image4" rel="colorbox"><img src="../images/gallery/gallery4.jpg" alt="Image4"/></a></li>
						<li><a href="../images/gallery/gallery5.jpg" title="Image5" rel="colorbox"><img src="../images/gallery/gallery5.jpg" alt="Image5"/></a></li>
						<li><a href="../images/gallery/gallery6.jpg" title="Image6" rel="colorbox"><img src="../images/gallery/gallery6.jpg" alt="Image6"/></a></li>
						<li><a href="../images/gallery/gallery7.jpg" title="Image7" rel="colorbox"><img src="../images/gallery/gallery7.jpg" alt="Image7"/></a></li>
						<li><a href="../images/gallery/gallery8.jpg" title="Image8" rel="colorbox"><img src="../images/gallery/gallery8.jpg" alt="Image8"/></a></li>
						<li><a href="../images/gallery/gallery9.jpg" title="Image9" rel="colorbox"><img src="../images/gallery/gallery9.jpg" alt="Image9"/></a></li>
						<li><a href="../images/tmp10.jpg" title="Image10" rel="colorbox"><img src="../images/tmp10.jpg" alt="Image10"/></a></li>
						<li><a href="../images/tmp11.jpg" title="Image11" rel="colorbox"><img src="../images/tmp11.jpg" alt="Image11"/></a></li>
                    </ul>
            </div> -->

            <div class="row">
                <div class="column">
                    <img src="../images/gallery/gallery1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                </div>
                <div class="column">
                    <img src="../images/gallery/gallery2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                </div>
                <div class="column">
                    <img src="../images/gallery/gallery3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                </div>
                <div class="column">
                    <img src="../images/gallery/gallery4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                </div>
            </div>

            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">

                    <div class="mySlides">
                        <div class="numbertext">1 / 4</div>
                        <img src="../images/gallery/gallery1.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">2 / 4</div>
                        <img src="../images/gallery/gallery2.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">3 / 4</div>
                        <img src="../images/gallery/gallery3.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">4 / 4</div>
                        <img src="../images/gallery/gallery4.jpg" style="width:100%">
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <div class="caption-container">
                    <p id="caption"></p>
                    </div>

                    <div class="column">
                    <img class="demo" src="../images/gallery/gallery1.jpg" onclick="currentSlide(1)" alt="Nature">
                    </div>

                    <div class="column">
                    <img class="demo" src="../images/gallery/gallery2.jpg" onclick="currentSlide(2)" alt="Trolltunga">
                    </div>

                    <div class="column">
                    <img class="demo" src="../images/gallery/gallery3.jpg" onclick="currentSlide(3)" alt="Mountains">
                    </div>

                    <div class="column">
                    <img class="demo" src="../images/gallery/gallery4.jpg" onclick="currentSlide(4)" alt="Lights">
                    </div>
                </div>
            </div>

</div>';

include("../include/footer.inc");
?>
