$(document).ready(function(){

    //** alert_success fadin fadout **//

    $('.alert_success').hide();

    $('.alert_success').fadeIn('slow');

    function hide_alert_success(){
        $('.alert_success').fadeOut('slow');
    }
    setTimeout(hide_alert_success, 8000);

    //** alert_error fadin fadout **//

    $('.alert_error').hide();

    $('.alert_error').fadeIn('slow');

    function hide_alert_error(){
        $('.alert_error').fadeOut('slow');
    }
    setTimeout(hide_alert_error, 8000);

    //** close with cross **//

    $( ".ferme" ).click(function() {
        $('.alert_success').fadeOut('slow');
        $('.alert_error').fadeOut('slow');
    });

});


