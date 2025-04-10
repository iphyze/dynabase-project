$(document).ready(function(){
                
$('.menu-open').click(function () {
    if ($(window).width() <= 1080) {
        $('.col-nav').animate({ right: '0%' });
        $('.menu-open').css({ visibility: 'hidden' });
        $('.menu-close').css({ visibility: 'visible' });
    }
});

$('.menu-close').click(function () {
    $('.col-nav').animate({ right: '-70%' });
    $('.menu-close').css({ visibility: 'hidden' });
    $('.menu-open').css({ visibility: 'visible' });
});

if ($(window).width() <= 1080) {
    $(document).mouseup(function (e) {
        var nav_container = $('.col-nav');
        if (!nav_container.is(e.target) && nav_container.has(e.target).length === 0) {
            nav_container.animate({ right: '-70%' });
            $('.menu-open').css({ visibility: 'visible' });
            $('.menu-close').css({ visibility: 'hidden' });
        }
    });
}

$(window).resize(function () {
    if ($(window).width() > 1080) {
        if ($('.col-nav').css('position') == 'relative') {
            $('.col-nav').css('right', '0%');
            $('.menu-close').css({ visibility: 'hidden' });
            $('.menu-open').css({ visibility: 'hidden' });
        }
    } else {
        if ($(window).width() <= 1080) {
            if ($('.col-nav').css('position') == 'absolute') {
                $('.col-nav').css('right', '-70%');
                $('.menu-close').css({ visibility: 'hidden' });
                $('.menu-open').css({ visibility: 'visible' });
            }
        }
    }
});

$(document).mouseup(function (e) {
    if ($(window).width() <= 1080) {
        var nav_container = $('.col-nav');
        if (!nav_container.is(e.target) && nav_container.has(e.target).length === 0) {
            nav_container.animate({ right: '-70%' });
            $('.menu-open').css({ visibility: 'visible' });
            $('.menu-close').css({ visibility: 'hidden' });
        }
    }
});



    

    
    
$(document).on("click", '.mc-dropdown', (function(){
    //$('.mln-sub-ul').slideToggle();
    //$('.mln-icon-down').toggle();
    //$('.mln-icon-left').toggle();
    
    //alert('Button Clicked');
    
    $(this).next('.mc-wrapper-sl').slideToggle();
    
    $('.fa-angle-right', this).toggle();
    //$('.mc-down-icon', this).toggle();
}));    

    

$(document).on('click', '.settings-icon', function(){
   
    if($('.settings-callout').css('display') == 'none'){
        $('.settings-callout').slideDown();
    }else{
        $('.settings-callout').hide();
    }
    
    
$(document).mouseup(function(e){

    var container = $('.settings-callout');
    
    if(!container.is(e.target) && container.has(e.target).length === 0){
        container.hide();
    }
    
})    

    
    
});        
    
    
});