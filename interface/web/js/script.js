$(document).ready(function(){
  $('.toggle').click(function(){
    $(this).toggleClass("rotate");
    $('.profil_submenu').toggleClass("show");
  });
  $('.menu_item').click(function(){
    $('.menu_option li').find('.show_submenu').removeClass('show_submenu');
    $(this).find("div").addClass('show_submenu');
  });
/**
* Toggle fermer filtre
**/

$('.option_filter i').click(function(){
    $('.filter_group').css('visibility','visible');
});
$('.filter_group i').click(function(){

    $('.filter_group').css('visibility','hidden');
});

/**
*   CHECKBOX
**/
var statusCheckBoxPermisC = $("#appbundle_demandeur_permisConduire");
var statusCheckBoxQpv = $("input[id = appbundle_demandeur_QPV]");
var statusSelectAllo = $('select[id=appbundle_demandeur_allocation]');
var statusMoyenLoco = $('select[id=appbundle_demandeur_moyenLocomotion]');

    if(statusCheckBoxPermisC.is(':checked') != true){
        $('.typePermis').css('visibility','hidden');
    }

    if(statusCheckBoxQpv.is(':checked') != true){
        $('.qpvnom').css('visibility','hidden');
    }

    if(statusSelectAllo.val() !== "Au"){
        $('.allocAutre').css('visibility','hidden');
    }

    if(statusMoyenLoco.val() !== "Au"){
        $('.autreM').css('visibility','hidden');
    }

statusCheckBoxPermisC.change(function(){
    statusCheckBoxPermisC.is(':checked') == true ? $('.typePermis').css('visibility','visible') : $('.typePermis').css('visibility','hidden');
});

statusCheckBoxQpv.change(function(){
    statusCheckBoxQpv.is(':checked') == true ? $('.qpvnom').css('visibility','visible') : $('.qpvnom').css('visibility','hidden');
});

statusSelectAllo.change(function(){
    statusSelectAllo.val() == "Au" ? $('.allocAutre').css('visibility','visible') : $('.allocAutre').css('visibility','hidden');
});

statusMoyenLoco.change(function(){
    statusMoyenLoco.val() == "Au" ? $('.autreM').css('visibility','visible') : $('.autreM').css('visibility','hidden');
});

/**
*   END CHECKBOX
**/
var $input = $('input[type=text]');

$input

    .each(function(){
        let valeur = $(this).val();
    if( valeur.length > 0 ){
        console.log('charged');
        $(this).addClass('input_touched');
    }
    else{
        console.log('decharged');
        $(this).removeClass('input_touched');
    }
    })
    .focus(function(){
        $(this).addClass('input_touched');
    })
    .blur(function(){
        let valeurOut = $(this).val()
        console.log(valeurOut)
        if(valeurOut === ''){
            $(this).removeClass('input_touched');
        }

    })

// $input.on('ready keydown keyup focus blur', function() {
//     if($(this).val() != '') {
//         $(this).addClass('input_touched');
//     } else{
//         $(this).removeClass('input_touched');
//     }
// });
// $input.on('ready keyup blur', function() {
//    $(this).addClass('input_touched');
// });

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
