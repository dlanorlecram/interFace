$(document).ready(function(){
  $('.toggle').click(function(){
    $(this).toggleClass("rotate");
    $('.profil_submenu').toggleClass("show");
  });
  $('.menu_item').click(function(){
    $('.menu_option li').find('.show_submenu').removeClass('show_submenu',1000);
    $(this).find("div").addClass('show_submenu',1000);
  });

    /*input interactive*/
/*  $("input").change(function(){
    console.log('essaie !');*/
    /*je cherche le parent de cette input et je la stock dans un variable*/
  /*  var this_parent = $(this).parent('div');
    console.log(this_parent);*/
    /*Ensuite je cherche ma valeur label pour l'afficher*/
/*
    $(this_parent).find('label').animate({visibility:"visible"}, 1000);
  });*/

var value = $('.red').val();
  console.log(value);
  $('.red').val(function(){
    if(!value){
      $('.qpvnom').css({visibility:'visible'});
    }
  });
});
