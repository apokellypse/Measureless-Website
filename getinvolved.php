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



    	<div class="content" id="getinvolved">
	        <h2>Get Involved</h2>
            <p>Contact Andrew Park at akp67@cornell.edu <br>
                Or <br>
                Visit the Announcements Page and come to an audition!</p>
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