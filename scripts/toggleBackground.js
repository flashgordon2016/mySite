//Credit https://harlemsquirrel.github.io/css/javascript/2017/01/31/dark-light-mode-switcher.html
function toggleBackground(){
  //Toggle black/white
  $('body').toggleClass('light-mode dark-mode');
  //Navbar
  $('#top-menu').toggleClass('navbar-dark bg-dark navbar-light bg-light');
  //Buttons
  //Credit: https://stackoverflow.com/questions/7002039/easiest-way-to-toggle-2-classes-in-jquery
  $('#light-btn').toggle();
  $('#dark-btn').toggle();
  $('.btn').toggleClass('btn-outline-light btn-outline-dark');
  //SVGS (done)
  //Set session variable accordingly
}

$(document).ready(function(){
  //Listener for click of dark/light button
  $('#light-btn').on('click', toggleBackground);
  $('#dark-btn').on('click', toggleBackground);
});
