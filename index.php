<!DOCTYPE html>
<html>
	<head>
		<?php include "meta.php";?>
        <script src="script/jquery-1.9.1.min.js"></script>
<script src="script/jssor.slider.mini.js"></script>
                <script>
    jQuery(document).ready(function ($) {
        var options = { $AutoPlay: true };
        var jssor_slider1 = new $JssorSlider$('slider1_container', options);
    });
</script>
  	</head>


	<body>

   	<?php include "nav.php";?> 
	<?php include "header.php";?>  

    <div class="content" id="slideshow">
        <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px; margin: auto;">
    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 600px; height: 300px;">
        <div><img u="image" src="img/thewomennoice.jpg" alt="women"/></div>
        <div><img u="image" src="img/themennoice.jpg" alt="men"/></div>
    </div>

        </div>
</div>


	    </div>
	    
	<div class="content" id="announcements">
	    <h2>Announcements</h1>
        
        <ul>
        <li>Check back soon for upcoming events!</li>
        </ul>
        
	    </div>
	    
	<?php include "footer.php";?>
	    
	</body>

</html>