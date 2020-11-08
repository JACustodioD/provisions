  window.addEventListener('scroll', function(){

    if($(window).scrollTop() > 20) {
      $(".start-header").attr("id",'sticky-menu');
    } else {
      $(".start-header").removeAttr("id");
    }
  });