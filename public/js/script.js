var menu = function () {
  $('.login').click(function () {
    $('.login .dropdown-menu').toggle();
  });
  $( "#accordion" ).accordion();
  
};

$(document).ready(menu);