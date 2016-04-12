$(function() {
	// scroll to top
	$(window).scroll(function() {
		if ($(this).scrollTop() > 250) {
			$('.scroll-up').fadeIn();
		} else {
			$('.scroll-up').fadeOut();
		}
	});
	$('.scroll-up').click(function(e) {
		e.preventDefault();

		$('body, html').animate({
			scrollTop : 0
		}, 500);
	});

	// Show topic-path
	if (this.location.pathname == '/top' || this.location.pathname == '/') {
		$('.topic-path').css("display", "none");
	}

	// Active menu
	var url = ((window.location.href.match(/([^\/]*)\/?$/)[1]).substring(0));
	$('.nav li a[href="/' + url + '"]').parent().addClass('active');

	// Collapse remove class in
	$(".header button.navbar-toggle.menu-toggle").click(function() {
		if ($("#languages-change").hasClass("in")) {
			$("#languages-change").removeClass("in");
		}
	});
	$(".header button.navbar-toggle.language-toggle").click(function() {
		if ($("#main-menubar").hasClass("in")) {
			$("#main-menubar").removeClass("in");
		}
	});

});