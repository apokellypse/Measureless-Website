<!DOCTYPE html>
<html>
	<head>
		<?php include "meta.php";?>
        <title>Measureless A capella</title>

  	</head>

	<body>
       	<?php include "nav.php";?> 

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
                <a href="img/slide3.jpg"></a>
                <a href="img/slide4.jpg"></a>
                <a href="img/slide5.jpg"></a>
            </div>	      
            <div id="banner"> 
            <!--    <h4><em>Cornell's</em> Christian Acapella</h4> -->
            </div>    
        </div>

    	<div class="content" id="announcements">
	        <h2>Upcoming Events</h2>
            
            <div class="datebox">
                <div class="date">Nov<br>22</div>
                <p><em>3:00PM</em><a target="_blank" href="https://www.facebook.com/events/1721306878094811/"> Winter Concert </a> &zwnj; &zwnj; - &zwnj; &zwnj; Anabel Taylor Hall Chapel</p>
            </div>

            <div class="datebox">
                <div class="date">Dec<br>6</div>
                <p><em>6:00PM</em><a target="_blank" href="https://www.facebook.com/events/745530378874210/"> CBS Felly Dinner Feature </a> &zwnj; &zwnj; - &zwnj; &zwnj; St Luke Lutheran Church</p>
            </div>

            <div class="datebox">
                <div class="date">Apr<br>TBD</div>
                <p><em>Time TBD</em> Possible Asia Night Feature </a> &zwnj; &zwnj; - &zwnj; &zwnj; Location TBD</p>
            </div>

            <div class="datebox">
                <div class="date">May<br>TBD</div>
                <p><em>Time TBD</em> 2015 Spring Concert </a> &zwnj; &zwnj; - &zwnj; &zwnj; Location TBD</p>
            </div>


            
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