// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function () {};
  var methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
  ];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());



// Place any jQuery/helper plugins in here.
$(document).ready(function(){
  // Block search button action
  $(".navb-search > form").submit(function(e){
    e.preventDefault();
  })
  // Navbar script
  $(".navbar-brand").click(function(){
      $(".side-bar").toggleClass("side-bar-sm-active side-bar-lg-active");
      $(".page-body").toggleClass("page-active");
      $("body").toggleClass("body-active");
      $("main").toggleClass("main-full-body");
      $("footer").toggleClass("footer-full-body");
  })
  // $(".page-body").click(function(){
  //     $(".side-bar").removeClass("side-bar-active");
  //     $(".page-body").removeClass("page-active");
  //     $("body").removeClass("body-active");
  // })

  // Theme
  setSideNavTheme();
  $(".theme-pck").click(function(){
    $(".theme-option").toggleClass("active");
  })
  $(".side-nav-theme").click(function(){
    let theme_color = $(this).attr("theme-color");
    $(".side-nav-theme").removeClass("active");
    // Store side nav theme to localstorage
    let themeOptions = {sideNavTheme : theme_color};
    localStorage.setItem("theme",JSON.stringify(themeOptions));
    setSideNavTheme();
  })
  // Set side nav function
  function setSideNavTheme(){
    let localstr = localStorage.getItem("theme");
    if(localstr){
      let nav_theme = JSON.parse(localstr).sideNavTheme;

      if($(".side-bar").attr("data-theme") == "purple")
      {
        $(".side-bar").attr("data-theme",nav_theme)
      }else{
        $(".side-bar").attr("data-theme",nav_theme)
      }
    }
    
  }

  //active toltops
  $('[data-toggle="tooltip"]').tooltip();
    
})