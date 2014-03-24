(function ($) {
  /** VEGAS SLIDEHSOW **/
  $(function () {
    $.vegas('slideshow', { backgrounds: [
      { src: '/sites/all/modules/custom/bhack_modifications/images/ideas-map.jpg', fade: 1000, delay: 9000 },
      { src: '/sites/all/modules/custom/bhack_modifications/images/hackerspace.jpg', fade: 1000, delay: 9000 },
      { src: '/sites/all/modules/custom/bhack_modifications/images/workshop.jpg', fade: 1000, delay: 9000 },
    ]
    })('overlay', {
      src: 'assets/third/vegas/overlays/10.png'
    });
  });

  $(document).ready(function () {

    /** TOOLTIP **/
    $('.tooltips').tooltip({
      selector: "#header-landing",
      container: "body"
    })

    /** SMOOTH SCROLL SELECTOR **/
    $('ul.scroll-nav a').smoothScroll({
      easing: 'swing',
      speed: 500
    });
    $('#back-top a').smoothScroll({
      easing: 'swing',
      speed: 500
    });

    /** BACK TO TOP **/
    $("#back-top").hide();

    /** BACk TO TOP FADE IN **/
    $(function () {
      $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
          $('#back-top').fadeIn();
        } else {
          $('#back-top').fadeOut();
        }
      });
    });
  });
})(jQuery);
