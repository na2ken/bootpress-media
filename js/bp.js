/* ================================================== *
 *
 *    jquery.bootstrap-autohidingnavbar.js and page scrolling feature Settings
 *    v2.0.3
 *
 * ================================================== */

// Return settings is $('.navbar-fixed-top').autoHidingNavbar('disableAutohide',false);
$('.navbar-fixed-top').autoHidingNavbar('disableAutohide',false);
$(window).scroll(function () {
  var header = $('#header');
  var scroll = $(document).scrollTop();
  if(scroll >= 1){  // 0=default, 1=scroll-start
    header.addClass('is-black');
  } else {
    header.removeClass('is-black');
  }
});

// is Shown ?
var $navbar_collapse = $('.navbar-collapse');
$navbar_collapse.on('show.bs.collapse', function () {
  $(this).parents('.navbar').addClass('is-show');
});
$navbar_collapse.on('hidden.bs.collapse', function () {
  $(this).parents('.navbar').removeClass('is-show');
});

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('body').on('click', '.page-scroll a', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
// Floating label headings for the contact form
$(function() {
    $("body").on("input propertychange", ".formUnit-group", function(e) {
        $(this).toggleClass("formUnit-group-with-value", !! $(e.target).val());
    }).on("focus", ".formUnit-group", function() {
        $(this).addClass("formUnit-group-with-focus");
    }).on("blur", ".formUnit-group", function() {
        $(this).removeClass("formUnit-group-with-focus");
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});
