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
		  <a id="logo" class="pull-left"><img src="../images/logo.jpg"></a>
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
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdhlXxIcHQ-7_qVmmDKntWxswRinSuFg__O34h4MPd0S1QdVQ/viewform?embedded=true" style="width:100%; height:800px;" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
        </div>
</div>';

include("../include/footer.inc");
?>

