//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});




$(document).ready(function(){/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})
/* smooth scrolling for scroll down */
$('.scroll-down').click(function(){
  $('body,html').animate({scrollTop:$(window).scrollTop()+675},1000);
})

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#navbar' })

});