<?php
include("./include/header.inc");
echo 'FingerMonkeyPainting Home';
include("./include/header2.inc");
// header2 includes <body> tag, footer includes </body>


//add in title
echo '
<div class="container"> 
    <div class="jumbotron">

        <!--Start Nav Bar-->
        <nav class="navbar navbar-default navbar-fixed-top">
            <a class="navbar-brand" href="#">FingerMonkeyPainting</a>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </nav> 
        <!--end nav bar-->

        <h1>About Us</h1>
    </div>
</div>';

include("./include/footer.inc");
?>
