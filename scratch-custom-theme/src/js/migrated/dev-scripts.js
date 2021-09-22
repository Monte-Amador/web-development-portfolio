// PERSONAL SCRIPTS
// write the current year to the footer copyright area
document.querySelector('#homeYear').innerText = new Date().getFullYear();
console.log('This is the main file that will hold my own scripts - it\'s up and running!');

// TESTIMONIALS
(function ($) {
    $('#year').text(new Date().getFullYear());
    $(document).ready(function () {
        // Testimonials V1
        $('.testimonials-v1').slick({
            infinite: true,
            autoplay: false,
            arrows: true,
            pauseOnHover: false,
            autoplaySpeed: 2000,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow:
                '<div class="user-prev"><i class="fas fa-long-arrow-alt-left"></i></div>',
            nextArrow:
                '<div class="user-next"><i class="fas fa-long-arrow-alt-right"></i></div>',
        });
    });
})(jQuery);

$(document).ready(function(){
        $(".uncheck").click(function(){
          $("#nav-toggle").prop("checked", false);
        });
      });