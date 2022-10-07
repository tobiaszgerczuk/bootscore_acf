/*--------------------------------------------------------------
Theme JS
--------------------------------------------------------------*/

jQuery(function ($) {
  // Close offcanvas on click a, keep .dropdown-menu open
  $('.offcanvas a:not(.dropdown-toggle):not(a.remove_from_cart_button), a.dropdown-item').on('click', function () {
    $('.offcanvas').offcanvas('hide');
  });

  // Search collapse button hide if empty
  if ($('#collapse-search').children().length == 0) {
    $('.top-nav-search-md, .top-nav-search-lg').remove();
  }

  // Searchform focus
  $('#collapse-search').on('shown.bs.collapse', function () {
    $('.top-nav-search input:first-of-type').trigger('focus');
  });

  // Close collapse if searchform loses focus
  $('.top-nav-search input:first-of-type').on('focusout', function () {
    $('#collapse-search').collapse('hide');
  });

  // Scroll to top Button
  $(window).on('scroll', function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
      $('.top-button').addClass('visible');
    } else {
      $('.top-button').removeClass('visible');
    }
  });

  // div height, add class to your content
  $('.height-50').css('height', 0.5 * $(window).height());
  $('.height-75').css('height', 0.75 * $(window).height());
  $('.height-85').css('height', 0.85 * $(window).height());
  $('.height-100').css('height', 1.0 * $(window).height());

  // IE Warning
  if (window.document.documentMode) {
    let IEWarningDiv = document.createElement('div');
    IEWarningDiv.setAttribute('class', 'position-fixed top-0 end-0 bottom-0 start-0 d-flex justify-content-center align-items-center');
    IEWarningDiv.setAttribute('style', 'background:white;z-index:1999');
    IEWarningDiv.innerHTML = '<div style="max-width: 90vw;">' + '<h1>' + bootscore.ie_title + '</h1>' + '<p className="lead">' + bootscore.ie_limited_functionality + '</p>' + '<p className="lead">' + bootscore.ie_modern_browsers_1 + bootscore.ie_modern_browsers_2 + bootscore.ie_modern_browsers_3 + bootscore.ie_modern_browsers_4 + bootscore.ie_modern_browsers_5 + '</p>' + '</div>';
    document.body.appendChild(IEWarningDiv);
  }
  // IE Warning End


  jQuery(document).ready(function () {

    var visited = jQuery.cookie('visited');
    if (visited == 'yes') {
         // second page load, cookie active
    } else {
  
      $(function(){
        function show_popup(){
          $('#overlay').delay('40').fadeIn(300);  
        };
        window.setTimeout( show_popup, 40000 ); // 40 seconds
     });
          
    
        $('#close').click(function() {
          jQuery.cookie('visited', 'yes', {
            expires: 7 // the number of days cookie  will be effective
        });
          $('#overlay').fadeOut(300);
        });
   
    }

   
});


var num = 100; //number of pixels before modifying styles

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('#nav-main').addClass('fixed');
    } else {
        $('#nav-main').removeClass('fixed');
    }
});





}); // jQuery End



