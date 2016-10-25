$(document).ready(function(){
    $('.plugin_image').bsPhotoGallery({
        "hasModal" : true,
        "fullHeight" : false
    });

    $('.hide_profil').hide();

    $('.couverture_hide').hide();

    $('.profil_show').click(function(){
        $('.couverture_hide').hide();
        $('.profil_hide').fadeIn();
    });

    $('.couverture_show').click(function(){
        $('.profil_hide').hide();
        $('.couverture_hide').fadeIn();
    });
});