var isMobile;

if( navigator.userAgent.match(/Android/i) ||
    navigator.userAgent.match(/webOS/i) ||
    navigator.userAgent.match(/iPhone/i) ||
    navigator.userAgent.match(/iPod/i) ||
    navigator.userAgent.match(/iPad/i) ||
    navigator.userAgent.match(/BlackBerry/)
){
	isMobile = true;
}
	
$(function() {
	
	var $article = $('body > article, body section.main article, body section.posts article');
	var $aside = $('aside');
	var $footer = $('footer');
	var $articleTitle = $('article h1.title');
	var $articleImage = $('#article-image');
	var $window;
	
	$("a:not(.pagination a)").attr('href', function() {
		return this.href + '?theme=Pixelhaven+Minimal';
	});
	
	var mastheadsrc = $('.masthead iframe, .masthead img').attr("src");
	$('.figcaption a').attr("href", mastheadsrc);

	$(".pagination a, .back-to-top a").hover(
		function() {
			$(this).stop().animate({"opacity": "0.7"}, "slow");
		},
		function() {
			$(this).stop().animate({"opacity": "1"}, "fast");
		}
	);

	$('.back-to-top').find('a').click(function(e) {
		e.preventDefault();
		$('html, body').stop().animate({scrollTop:0}, 700);
		return false;
	});
	
	$('ul.sf-menu').superfish({dropShadows: false,delay: 0});
	$('ul.columns li:last-child').addClass('last');
	
	if (document.documentElement.clientWidth > 480) {
		responsiveEnhance($articleImage, 480);
	}
	
	setTimeout(function() {$article.animate({opacity: '1'}, 1000);}, 1000 * 0.5);
	setTimeout(function() {$aside.slideDown("slow");}, 1000 * 1);
	setTimeout(function() {$footer.fadeIn("slow");}, 1000 * 1.5);
	
	$("img:contains('spacer.gif')").remove();
	
	if(!isMobile) {
		/*
		$(window).scroll(function() {
			$window = $(this).scrollTop();
			$articleImage.css({
				'opacity' : 1-($window / $('#article-image').height())
			});
		});
		*/
	}
	
});