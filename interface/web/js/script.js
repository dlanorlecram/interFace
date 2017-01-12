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

/* Effect select block search item */

var color_mail_init = "rgb(255, 255, 255)";


  $('.row_item').on('click', function(){
    var spyClass = $(".row_item").find(".show_opt_item");
    var spyClassb = $(".row_item").find(".gp_dl");
    var status_mail = $(this).find('.mail').css('color');
    console.log(spyClass);
    console.log("valeur initiale: "+status_mail);

    /* Change color ".mail" when event click on */
      if(color_mail_init !== status_mail ){
        $(this).find('.mail').css('color', '#FFFFFF');
      }
      else{
        $(this).find('.mail').css('color', '#ED9767');
      }
    /* End of event*/

    $(this).find('.group_detail').toggleClass('gp_dl');
    $(this).find('.option_items').toggleClass('show_opt_item');
    console.log(spyClass);
    /* Checked presence class */
    if(spyClass.length === 1){
      spyClass.removeClass('show_opt_item');
      spyClassb.removeClass('gp_dl');
    }
    /* End of event*/
  });

  /* Effect close and open filter */

  $('.toggle_filter span').on('click', function(){
    $('.form_filter').toggleClass('show_filter');
  });
  /* End of event */
});
