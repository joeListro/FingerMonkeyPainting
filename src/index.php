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


        <div class="container">
            <h1>Ladder Monkey Painting</h1>
            <p>Stuff that goes here for filler maybe photos underneath here that links to the gallery?</p>
        </div>

    </div>
</div>';

include("./include/footer.inc");
?>
