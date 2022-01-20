
window.onscroll = function() {headerScroll()};
var header = document.getElementById("siteHeader");
var sticky = header.offsetTop;
function headerScroll() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

$(document).ready(function() {
    $('.btn-open-menu').click(function () {
        $('header').addClass('open');
    });

    $('.link-menu').click(function () {
        $('header').removeClass('open');
    });

    $('.btn-close-menu').click(function () {
        $('header').removeClass('open');
    });
});

$('.carousel-reviews').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    arrows: false,
    autoplay: true
});