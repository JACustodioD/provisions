  window.addEventListener('scroll', function(){

    if($(window).scrollTop() > 20) {
      $(".start-header").attr("id",'sticky-menu');
      $(".start-header").addClass('menu-fixed');
    } else {
      $(".start-header").removeAttr("id");
    }
  });