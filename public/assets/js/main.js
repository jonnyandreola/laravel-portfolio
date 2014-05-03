$(window).on('scroll resize', function(){
    var height = $(window).scrollTop();
    var width = $(window).width();
    if(height > 40 && width <= 560){
        $('body > header').css({'position': 'fixed', 'top': '-40px'});
        $('body > main').css('padding-top', '80px');
    } else {
        $('body > header, body > main').removeAttr('style');
    }
})

$('.each-picture').on('touchstart', function(){
    $(this).toggleClass('active');
})