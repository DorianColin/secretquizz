$(document).on("scroll", function (){

	var pixels = $(document).scrollTop()

	// $(".project.cn").css("top", pixels * -0.03)
	// $(".project.ph").css("top", pixels * -0.04)
	// $(".project.arteo").css("top", pixels * -0.07)
	$(".project.project-1 img").css("top", pixels * -0.06)
	$(".project.project-2 img").css("top", pixels * -0.08)
	$(".project.project-3 img").css("top", pixels * -0.03)
	$(".project.project-4 img").css("top", pixels * -0.05)
})

$(document).ready(function(){
	$('.burger-btn').click(function(){
		$('.menu').toggleClass('isOpen');
		$('header').toggleClass('navopen');
		$(this).toggleClass('baronclick');
		
	});
});