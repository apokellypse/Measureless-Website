<!DOCTYPE html>
<html>
	<head>
		<?php include "meta.php";?>
        <title>Measureless Acapella</title>

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
            <!--    <h4><em>Cornell's</em> Christian Acapella</h4> -->
            </div>    
        </div>

    	<div class="content" id="announcements">
	        <h2>Announcements</h2>
            
            <div class="date">
            Nov<br> 22
            </div> <p> <em>3:00PM</em> <a href="https://www.facebook.com/events/1721306878094811/"> Winter Concert </a> &zwnj; &zwnj; - &zwnj; &zwnj; Anabel Taylor Hall Chapel
            
            </p>
            
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