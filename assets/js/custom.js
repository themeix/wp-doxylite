(function ($) {
  "use strict";
  // Fixed Header
  $(window).scroll(function () {
    if ($(this).scrollTop() > 90) {
      $(".header-navigation").addClass("fixed-nav");
    } else {
      $(".header-navigation").removeClass("fixed-nav");
    }
  });
  // Preloader
  if ($('.loading-main').length > 0) {
    $(window).on('load', function () {
      $('.loading-main').fadeOut();
      $('.pre-loader').delay(350).fadeOut("slow", 0.0);
      $('body').css({
        'overflow-y': 'scroll'
      });
    });
  }
  // Responsive menu
  $('.slimmenu').slimmenu({
    resizeWidth: '992',
    collapserTitle: '',
    animSpeed: 'fast',
    easingEffect: null,
    indentChildren: true,
  });
  // Slider Carousel
  if ($('.slider-carousel').length > 0) {
    $('.slider-carousel').owlCarousel({
      loop: true,
      nav: false,
      dots: false,
      autoplay: true,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 1,
        }
      }
    })
  }
  // Company Carousel
  if ($('.company-slider').length > 0) {
    $('.company-slider').owlCarousel({
      loop: true,
      nav: false,
      dots: false,
      center: true,
      margin: 70,
      autoplay: true,
      responsiveClass: true,
      responsive: {
        0: {
          items: 3,
        },
        768: {
          items: 5,
        }
      }
    })
  }
  // Testimonial Carousel
  if ($('.testimonial-slider').length > 0) {
    $('.testimonial-slider').owlCarousel({
      loop: true,
      nav: true,
      dots: false,
      margin: 60,
      autoplay: true,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
        }
      }
    })
  }
  if ($('.testimonial-slider2').length > 0) {
    $('.testimonial-slider2').owlCarousel({
      loop: true,
      nav: true,
      dots: false,
      margin: 60,
      autoplay: true,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
        },
        992: {
          items: 3,
        }
      }
    })
  }


  // Wow Animation
  var wow = new WOW({
    boxClass: 'wow', // default
    animateClass: 'animated', // default
    offset: 10, // default
    mobile: true, // default
    live: true // default
  })
  wow.init();
  // Video Modal
  if ($('.popup-youtube, .popup-vimeo, .popup-gmaps').length > 0) {
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
      disableOn: 0,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: true,
    });
  }
  // File Upload
  $(".form-action").on("change", ".file-upload-field", function () {
    $(this).parent(".file-upload").attr("data-text", $(this).val().replace(/.*(\/|\\)/, ''));
  });
  // timeline animation


  var items = document.querySelectorAll(".timeline li");

  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
      }
    }
  }
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);

  // Home Top
  var offset = 300,
    offset_opacity = 1200,
    scroll_top_duration = 1000,
    $back_to_top = $('.home-top');
  $back_to_top.on('click', function (event) {
    event.preventDefault();
    $('body,html').animate({
      scrollTop: 0,
    }, scroll_top_duration);
  });



})(jQuery);

(function ($) {

  jQuery.fn.supposition = function () {
    var $w = jQuery(window),
      /*do this once instead of every onBeforeShow call*/
      _offset = function (dir) {
        return window[dir == 'y' ? 'pageYOffset' : 'pageXOffset'] || document.documentElement && document.documentElement[dir == 'y' ? 'scrollTop' : 'scrollLeft'] || document.body[dir == 'y' ? 'scrollTop' : 'scrollLeft'];
      },
      onInit = function () {
        /* I haven't touched this bit - needs work as there are still z-index issues */
        $topNav = jQuery('li', this);
        var cZ = parseInt($topNav.css('z-index')) + $topNav.length;
        $topNav.each(function () {
          jQuery(this).css({
            zIndex: --cZ
          });
        });
      },
      onHide = function () {
        this.css({
          marginTop: '',
          marginLeft: ''
        });
      },
      onBeforeShow = function () {
        this.each(function () {
          var $u = jQuery(this);
          $u.css('display', 'block');
          var menuWidth = $u.width(),
            parentWidth = $u.parents('ul').width(),
            totalRight = $w.width() + _offset('x'),
            menuRight = $u.offset().left + menuWidth;
          if (menuRight > totalRight) {
            $u.css('margin-left', ($u.parents('ul').length == 1 ? totalRight - menuRight : -(menuWidth + parentWidth)) + 'px');
          }

          var windowHeight = $w.height(),
            offsetTop = $u.offset().top,
            menuHeight = $u.height(),
            baseline = windowHeight + _offset('y');
          var expandUp = (offsetTop + menuHeight > baseline);
          if (expandUp) {
            $u.css('margin-top', baseline - (menuHeight + offsetTop));
          }
          $u.css('display', 'none');
        });
      };

    return this.each(function () {
      var $this = jQuery(this),
        o = $this.data('sf-options'); /* get this menu's options */

      /* if callbacks already set, store them */
      var _onInit = o.onInit,
        _onBeforeShow = o.onBeforeShow,
        _onHide = o.onHide;

      jQuery.extend($this.data('sf-options'), {
        onInit: function () {
          onInit.call(this); /* fire our Supposition callback */
          _onInit.call(this); /* fire stored callbacks */
        },
        onBeforeShow: function () {
          onBeforeShow.call(this); /* fire our Supposition callback */
          _onBeforeShow.call(this); /* fire stored callbacks */
        },
        onHide: function () {
          onHide.call(this); /* fire our Supposition callback */
          _onHide.call(this); /* fire stored callbacks */
        }
      });
    });
  };

})(jQuery);
(function ($) { //create closure so we can safely use $ as alias for jQuery

  jQuery(document).ready(function () {

    // initialise plugin
    var example = jQuery('#example').superfish({
      //add options here if required					
    }).supposition();

  });

  jQuery('.collapse-button').on('click', function () {
    jQuery('.collapse-button').toggleClass('navigation-close-icon');
  });

  $('#myModal').on('shown.bs.modal', function () {
    $('.seachmodal').focus();
  })

})(jQuery);

window.print_this = function (id) {
  var prtContent = document.getElementById(id);
  var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');


  WinPrint.document.write(prtContent.innerHTML);
  WinPrint.document.close();
  WinPrint.setTimeout(function () {
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
  }, 1000);
}

var scroll = new SmoothScroll('a[href*="#"]');