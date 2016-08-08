
/**
 * Makes "skip to content" link work correctly in IE9, Chrome, and Opera
 * for better accessibility.
 *
 * @link http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
 */

 ( function() {
  var isWebkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
    isOpera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
    isIE     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

  if ( ( isWebkit || isOpera || isIE ) && document.getElementById && window.addEventListener ) {
    window.addEventListener( 'hashchange', function() {
      var id = location.hash.substring( 1 ),
        element;

      if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
        return;
      }

      element = document.getElementById( id );

      if ( element ) {
        if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
          element.tabIndex = -1;
        }

        element.focus();

        // Repositions the window on jump-to-anchor to account for admin bar and border height.
        window.scrollBy( 0, -53 );
      }
    }, false );
  }
} )();

/**
 *
 * Theme Sliders
 *
 */

// Full width slider
jQuery(document).ready(function($) { 

//var mySwiper = new Swiper ('.swiper-container');
  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    loop: true,
    autoplayDisableOnInteraction:false,
    autoplay: 4000,
    slidesPerView: 1,    
    // Navigation arrows
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',

    // If we need pagination
    pagination: '.swiper-pagination',
    paginationClickable:true,    
    // And if we need scrollbar
    scrollbar: '.swiper-scrollbar'   
   }) ;
  
  // Anything Slider
  var wpsAnySwiper = new Swiper ('.wps-anything-swiper-container', {
    // Optional parameters
    loop: true,
    autoplayDisableOnInteraction:false,
    autoplay: 4000,
    slidesPerView: 1,    
    // Navigation arrows
    nextButton: '.wps-anything-swiper-button-next',
    prevButton: '.wps-anything-swiper-button-prev',
  
    // If we need pagination
    pagination: '.swiper-pagination',
    paginationClickable:true,
    // And if we need scrollbar
    scrollbar: '.swiper-scrollbar'   
   });
});

// http://scottjehl.github.io/picturefill/#getting-started
// Picture element HTML5 shiv
document.createElement( "picture" );

// Detect scroll
jQuery(document).ready(function($) {   

  $(window).scroll(function (event) {
      var scroll = $(window).scrollTop();
     var height1 = $(".site-header");
     // console.log(scroll);
     if( 0 < scroll){
      height1.addClass('bg--dark');
     }else{
      height1.removeClass('bg--dark');
     }

  });

});
jQuery(document).ready(function($) { 


$(".p_box__image").click(function(){
  $(this).fancybox({
        type: 'inline',
        content: $(this).siblings('.p_box__content').html()

  });

});
//$(".fancybox").fancybox();

//content: '#dialogContent'

//  $(".p_box").each(function (i) {
//        $(this).on("click", function () {
//            
//            $.fancybox();
//        }); // on click
//    }); // each
});





// Detect sections
//jQuery(document).ready(function($) {   
//
//            $(function domReady($) {
//                // for each element with the class 'color'
//                $('.section').each(function eachElement() {
//                    // cache the jQuery object
//                    var $this = $(this);
//
//                    var position = $this.position();
//
//                    window.console.log(position);
//                    window.console.log('min: ' + position.top + ' / max: ' + window.parseInt(position.top + $this.height(), 10));
//
//                    var nav = $('.site-nav__link');
//
//                    $this.scrollspy({
//                        min: position.top,
//                        max: position.top + $this.height(),
//                        onEnter: function onEnter(element, position) {
//                            $(".site-nav__link[href='#"+ element.id +"']").addClass('bg--color-one');
//
//                   
//                            // window.console.log('Entering ' + element.id);
//                            // window.console.log('Entering ' + element.id);
//                        },
//                        onLeave: function onLeave(element, position) {
//
//                          $(".site-nav__link[href='#"+ element.id +"']").removeClass('bg--color-one');
//                           // window.console.log('Leaving ' + element.id);
//                        }
//                    });
//                });
//    });
//});

/* Sticky Header */
// jQuery(document).ready(function($) {   
// 
//   var mql = window.matchMedia("screen and (min-width: 64em)");  
// 
// 
//   var height1 = $(".site-header").outerHeight();
//   var height2 = $(".site-footer").outerHeight(true);
//   var height3 = $(".site-global-content").outerHeight();
//   
//   if (mql.matches){
//     // Sticky header
//     $(".site-header").sticky();
// 
//     //$(".site-content").sticky({topSpacing:height1,bottomSpacing:height1+height2+height3})
//     //Sticky widget
//    // $(".sticky-widget").sticky({topSpacing:height1,bottomSpacing:height1+height2+height3});
//   }else{
//     $(".site-header").unstick();
//    // $(".sticky-widget").unstick();
//   }
// 
//   $( window ).resize(function() { 
//     if (mql.matches != true){
//       $(".site-header").unstick();
//     //  $(".sticky-widget").unstick();
//     }
//   });
//   
// });