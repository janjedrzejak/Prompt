var i= [];
var scroll_speed=100000;


function change_speed() {
    scroll_speed = document.getElementById("speed").value;
    scroll_speed*=100;
    console.log(scroll_speed);
}

i[0]=0;
$(document).ready(function() {
$("#play").click(function() {
	if(i[0]==0) {
		document.getElementById("play-button").src="img/svg/icon_stop.svg";
		i[0]++;
		console.log('is scrolling');
	     $('body').animate({ scrollTop: $("#end").offset().top }, scroll_speed, "linear");
 	} else {
 		i[0]--;
 		window.location.reload(false);
 	}
 });
});

$(document).ready(function() {
$("#on-start").click(function() {
     $('body').animate({ scrollTop: $("body").offset().top }, 300);
     console.log('is on top');
 });
});

$(document).ready(function() {
$("#on-end").click(function() {
     $('body').animate({ scrollTop: $("#end").offset().top }, 300);
     console.log('is on end');
 });
});

$(document).ready(function() {
$("#full-screen").click(function() {
    $("html, body")[0].webkitRequestFullScreen();
 });
});

i[1]=0;
$(document).ready(function() {
$("#flip-screen").click(function() {
    if(i[1]==0) {
        document.getElementById("body").style.transform = "scale(-1, -1)";
        $('body').animate({ scrollTop: $("#start").offset().top }, 300);
        i[1]++;
    } else {
        document.getElementById("body").style.transform = "scale(1, 1)";
        $('body').animate({ scrollTop: $("body").offset().top }, 300);
        i[1]--;
    }
 });
});