<nav>
	<ul>
	    <li> <a href="about.php"> about</a></li>
        <li><a href="member.php"> members</a></li>
	    <li><a href="index.php"><img src="img/note.png" alt="note" id="note"></a></li>
    	<li><a href="media.php">media</a></li>
   		<li><a href="getinvolved.php">get involved</a></li>
    </ul>
	<a href="index.php" id="home">MEASURELESS</a>
        <p>Cornell's Christian Acapella</p>
    
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script>
        $(document).ready(function() {

      $("#note,#home").mouseover(function(){
          $("#note").stop();
         $("#note").effect( "bounce", 
          {times:3}, 300 );
      });
      $("#note,#home").mouseleave(function(){
          $("#note").stop();
      });
            

   });
   </script>
</nav>