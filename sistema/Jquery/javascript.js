$(document).ready(function(){
	$(".hidden_div").hide();
	
	$(".open_div").click(function(){
		$(this).toggleClass("active").next().slideToggle("fast");
		return false;
	});
});