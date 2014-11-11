<!DOCTYPE html>
<html>
	<head>
		<?php include "meta.php";?>
        <title>Measureless Acapella</title>
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
       	<?php include "nav2.php";?> 

        <div id="slideshow">
            <div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel">
                <div class="slides"></div>
                <h3 class="title"></h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="play-pause"></a>
                <ol class="indicator"></ol>
            </div>
            <div id="links">
                <a href="img/thewomennoice.jpg"></a>
                <a href="img/themennoice.jpg" ></a>
            </div>	      
            <div id="banner"> 
                <h4><em>Cornell's</em> Christian Acapella</h4>
            </div>    
        </div>

    	<div class="content" id="announcements">
	        <h2>Announcements</h1>
            <p>Check back soon for upcoming events!</p>
	    </div>
	    
    	<?php include "footer.php";?>
        <script src="js/blueimp-gallery.min.js"></script>
        <script>
            blueimp.Gallery(
            document.getElementById('links').getElementsByTagName('a'),
            {
                container: '#blueimp-gallery-carousel',
                carousel: true
            });
        </script>
	</body>
</html>