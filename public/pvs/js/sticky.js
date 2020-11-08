
      $(window).scroll(function() {
        if ($("#sticky-menu").offset().top > 56) {
            $("#menu").addClass("bg-inverse");
        } else {
            $("#sticky-menu").removeClass("bg-inverse");
        }
      });
