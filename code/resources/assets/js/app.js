(function(){
    console.log('js works');
})();

$(document).ready(function(){

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