$(document).ready(function() {

    var offset = $("div.centernote").parent().offset();
    var offsetLeft = 0;
    var offsetTop = 0;
    var counter = 0;

    //makes sure that the note doesn't disappear off the top of the page
    hoverInterval2 = setInterval(checkPos, 3000);

    function checkPos() {
        if (counter == 0) {
            console.log("resetting position");
            offsetTop = offset.top;
            offsetLeft = offset.left;
            counter = 1;
            console.log("original positions: top=" + offsetTop + " left=" + offsetLeft);
        } else {
            console.log("desired positions: top=" + offsetTop + " left=" + offsetLeft);
            console.log("animating back to default");
            // $("div.centernote").animate(function() {
            //     top: offsetTop;
            //     left: offsetLeft
            // });
        }
    }

    //everytime the window is resized, this is called to reset 
    //the desired default position of the note logo.
    $(window).resize(function() { 
        console.log("detected window resize");
        counter = 0;
    });

    //makes things bounce
    function bounceIt() {
        console.log("inside bounceIt");
        $("div.centernote").effect("bounce", {times: 3}, 400);
    }

    function expandIt() {
        console.log("inside expandIt");
        $("#note").animate({
            height: "+=50",
            width: "+=50"
        }, 500, function() {
            console.log("animation complete, expandIt");
        });
    }

    function shrinkIt() {
        console.log("inside expandIt");
        $("#note").animate({
            height: "-=50",
            width: "-=50"
        }, 500, function() {
            console.log("animation complete, expandIt");
        });
    }

    //Hover listener to make note logo bounce
    $("#noteli").hover(
        function() {
            hoverInterval = setInterval(bounceIt, 100);
        },
        function() {
            console.log("should stop animating");
            $("div.centernote").stop(true, false);
            // $("div.centernote").css("top", 0);
            $("div.centernote").animate({
                top: 0
            }, 200, function() {
                //nothing happens
            });
            clearInterval(hoverInterval);
        }
    );

  });