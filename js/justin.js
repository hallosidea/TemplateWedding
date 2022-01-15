$(window).scroll(function() {
    $('.sl-fadeIn').each(function(){
    var imagePos = $(this).offset().top;

    var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+900) {
            $(this).addClass("fadeIn");
        }
    });
});


$('.sl-Up').click(function() {
    $(this).addClass("slideUp");
});