// Smooth nav Scrolling

    $(document).ready(function(){

      $('.nav li a').click(function() {

        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        && location.hostname == this.hostname) {

          var $target = $(this.hash);
          $target = $target.length && $target
          || $('[name=' + this.hash.slice(1) +']');
          if ($target.length) {

            var targetOffset = $target.offset().top;
            $('html,body')
            .animate({scrollTop: targetOffset}, 1000);
           return false;
          }
        }
      });
    });

//navbar collapse

$(document).ready(function () {
    $(".navbar-nav li a").click(function(event) {
        $(".navbar-collapse").collapse('hide');
    });
});

// Fade opacity function

$(window).scroll(function () {

    $('[id^="box1"]').each(function () {

        if (($(this).offset().top - $(window).scrollTop()) < -200) {

            $(this).stop().fadeTo(100, 0);
        } else {
          
            $(this).stop().fadeTo('fast', 1);
        }
    });
});


// Active state nav

$(document).ready(function(){

  var $sections = $('.navsnap');
  
  $(window).scroll(function(){
    
    var currentScroll = $(this).scrollTop();
    
    var $currentSection
    
    $sections.each(function(){   
      var divPosition = $(this).offset().top;
      if( divPosition - 1 < currentScroll ){
        $currentSection = $(this);
      }
      
      var id = $currentSection.attr('id');
     $('a').removeClass('active');
     $("[href=#"+id+"]").addClass('active');
      
    })

  });
});

// carousel animation

(function( $ ) {

    function doAnimations( elems ) {

        var animEndEv = 'webkitAnimationEnd animationend';
        
        elems.each(function () {

            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }
    
    var $myCarousel = $('#carousel-example-generic'),
        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
        
    $myCarousel.carousel();
    
    doAnimations($firstAnimatingElems);
    
    $myCarousel.carousel('pause');
    
    $myCarousel.on('slide.bs.carousel', function (e) {

        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });  
    
})(jQuery);