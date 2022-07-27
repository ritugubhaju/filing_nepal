
    $(document).ready(function () {

        //Check to see if the window is top if not then display button
        $(window).scroll(function () {
          // Show button after 100px
          var showAfter = 100;
          if ($(this).scrollTop() > showAfter) {
            $('#goToTopBtn').fadeIn();
          } else {
            $('#goToTopBtn').fadeOut();
          }
        });
  
        //Click event to scroll to top
        $('#goToTopBtn').click(function () {
          $('html, body').animate({ scrollTop: 0 }, 800);
          return false;
        });
  
      });
  