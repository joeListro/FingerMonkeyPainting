<?php
include("../include/header.inc");
echo 'About/Contact LadderMonkeyPainting';
include("../include/header2.inc");
// header2 includes <body> tag, footer includes </body>


//add in title
echo '
<div class="container"> 

        <!--Start Nav Bar-->
        <nav class="navbar navbar-default navbar-fixed-top">
            <a class="navbar-brand" href="#">LadderMonkeyPainting</a>
            <ul class="nav navbar-nav">
                <li><a href="../index.php">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="./about.php">About/Contact</a></li>
                <li><a href="./gallery.php">Gallery</a></li>
                <li class="active"><a href="./schedule.php">Scheduling</a></li>
                <li><a href="./employees.php">Meet the Team</a></li>
            </ul>
        </nav> 
        <!--end nav bar-->


        <div>
            <iframe src="https://docs.google.com/a/mymail.champlain.edu/forms/d/e/1FAIpQLSe0iHyIf3Q8ZCmkJ6eHjy0ZfzIVGeW8lVaVlEBuVg-9Iekt1g/viewform?embedded=true" style="width:100%; height:700px;" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
        </div>
</div>';

include("../include/footer.inc");
?>
