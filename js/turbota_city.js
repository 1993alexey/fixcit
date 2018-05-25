$(function() {
  // Highlight the current page in nav bar
  if (sessionStorage.getItem("page") != "undefined") {
    var page = sessionStorage.getItem("page");
    //window.location.href.split("/");
  } 
  var active = false;
  // Loop through all nav bar elements and highlight the current one
  //page = page[page.length - 1];
  $('.navbar-nav > li > a').each(function() {
    var $href = $(this).attr('href').split(".");
    $href = $href[0];
    if ($href == page) {
      $(this).parent().addClass('active');
      active = true;
    } else {
      $(this).parent().removeClass('active');
    }
  });
  
  // If no element were found, highlight the first element
  if (active == false) {
    $(".navbar-links > li:first-child").addClass('active');
  }
});