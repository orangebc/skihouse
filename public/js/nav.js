(function(){
	
	$("#nav-toggle").click(function(){
		$("#nav").toggle("slideDown");
	});

	$(".navigation__close").click(function(){
		$("#nav").hide("slideUp");
	});

})();
