/** VEGAS SLIDEHSOW **/
$(function() {
  $.vegas('slideshow', { backgrounds: [
    { src:'images/ideas-map.jpg',   fade:1000, delay: 9000 },
    { src:'images/3d-printing.jpg', fade:1000, delay: 9000 },
    { src:'images/workshop.jpg',    fade:1000, delay: 9000 },
    { src:'images/hackerspace.jpg', fade:1000, delay: 9000 },
  ]
  })('overlay', {
    src:'assets/third/vegas/overlays/10.png'
  });
});

$(document).ready(function() {
  var _get = {};
  if(document.location.toString().indexOf('?') !== -1) {
    var q = document.location.toString().replace(/^.*?\?/, '').split('&');

    for(var i=0, l=q.length; i<l; i++) {
      var a = decodeURIComponent(q[i]).split('=');
      _get[a[0]] = a[1];
    }
  }

  /** FORM / THANKS **/
  if('thanks' in _get) {
    $('.thanks').show();
  }
  else {
    $('.entitytype-register_interest-form').show();
  }

  /** TOOLTIP **/
  $('.tooltips').tooltip({
    selector: "[data-toggle=tooltip]",
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
