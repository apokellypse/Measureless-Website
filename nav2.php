<nav>
	<ul>
	    <li> <a href="about.php"> about</a></li>
        <li><a href="member.php"> members</a></li>
	    <li id="noteli">
            <div><img src="img/note.png" alt="note" id="note"></div>
            <div class="gonzo" id="home"><a href="index.php" id="home">Measureless</a></div>
            <div class="gonzo"><a href="index.php">Cornell's Christian A capella</a></div>
        </li>

    	<li><a href="media.php">media</a></li>
   		<li><a href="getinvolved.php">get involved</a></li>
    </ul>
	
    
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script>
  $(document).ready(function() {

    var noteOffset = $("#note").offset();
    var noteTop = noteOffset.top;
    var noteLeft = noteOffset.left;

  function bounceIt() {
    console.log("inside bounceIt");
    $("#note").effect("bounce", {times: 3}, 400);
  }


    $("#noteli").hover(
        function() {
            hoverInterval = setInterval(bounceIt, 100);
        },
        function() {
            console.log("should stop animating");
            $("#note").stop(true, false);

            var noteOffsetNew = $("#note").offset();
            var noteTopNew = noteOffsetNew.top;
            var noteLeftNew = noteOffsetNew.left;

            $("#note").animate({
                    'top': noteTop - noteTopNew,
                    'left' : noteLeft - noteLeftNew
            }, 200)

            clearInterval(hoverInterval);
        }
    );

    // $("#note, #home").mouseenter(function(){
    //   $("#note").stop();
    //   $("#note").effect("bounce", {times: 2}, 400);
    // });
    // $("#note, #home").mouseleave(function(){
    //   $("#note").stop();
    // });
  });
</script>

</nav>