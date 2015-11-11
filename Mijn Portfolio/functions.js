// nav active

$('.nav li a').on('click', function() {
    $(this).parent().parent().find('.active').removeClass('active');
    $(this).parent().addClass('active').css('font-weight', 'bold');
});

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

// Fade opacity function

$(window).scroll(function () {
    $('[id^="box"]').each(function () {
        if (($(this).offset().top - $(window).scrollTop()) < -300) {
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