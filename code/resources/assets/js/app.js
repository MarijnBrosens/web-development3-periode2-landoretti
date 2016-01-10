(function(){
    console.log('js works');
})();

$(document).ready(function(){

    $("#login").on('mouseenter', function() {
        $('#login').toggle();
        $('#login-form').toggle();
        $('#login-form__user').focus();
    });

    $("#login-form").on('mouseleave', function() {
        $('#login').toggle();
        $('#login-form').toggle();
    });

    /*
     * INIT SLIDER
     * homepage
     */
    $('.home-slider').bxSlider({
        mode: 'fade',
        captions: true,
        auto: true,
        speed: 1000,
        pause: 6000
    });

    /*
     * INIT SLIDER
     * detail page
     */
    $('.detail-slider').bxSlider({
        mode: 'fade',
        controls: false,
        speed: 0,
        pagerCustom: '#detail-pager'
    });
});