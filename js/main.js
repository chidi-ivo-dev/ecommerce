// /* Sticky Header */

// $window = $(window);
// $window.scroll(function() {
//   $scroll_position = $window.scrollTop();
//     if ($scroll_position > 300) { // if body is scrolled down by 300 pixels
        
//         $('#header').addClass('sticky');
//         $('.top-section').remove();

//         // to get rid of jerk
//         header_height = $('.your-header').innerHeight();
//         $('body').css('padding-top' , header_height);


//     } else {
//         $('body').css('padding-top' , '0');
//         $('#header').removeClass('sticky');
//     }
//  });