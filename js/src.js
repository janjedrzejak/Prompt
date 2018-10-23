var scroll_speed = 100000;
		
$(document).ready(function() {
$("#down").click(function() {
     $('body').animate({
         scrollTop: $("#elementtoScrollToID").offset().top
     }, scroll_speed, "linear");
 });
});

$(document).ready(function() {
$("#up").click(function() {
     $('body').animate({
         scrollTop: $("body").offset().top
     }, 1000);
 });
});

$(document).ready(function() {
$( "#pause" ).click(function() {
	console.log('a');
  window.location.reload(false);

});
});