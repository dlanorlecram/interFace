$(document).ready(function(){
  $('.toggle').click(function(){
    $(this).toggleClass("rotate");
    $('.profil_submenu').toggleClass("show");
  });
  $('.menu_item').click(function(){
    $('.menu_option li').find('.show_submenu').removeClass('show_submenu',1000);
    $(this).find("div").addClass('show_submenu',1000);
  })
});
