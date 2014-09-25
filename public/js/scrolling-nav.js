//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
$(function() {
    $('#js-registrarse').on('click',function(){
        $('#registeruser').slideToggle();
        if ( $('#loginuser').hasClass('invisible') ) {
            $('#loginuser').addClass('hidesection').removeClass('invisible');
        }else{
            $('#loginuser').removeClass('hidesection').addClass('invisible');
        }
    })

    $('#js-accesar').on('click',function(){
        $('#loginuser').slideToggle();
    })
});
$(function() {
    getServidoresToHome();
});
getServidoresToHome = function () {
    var json = null;
    $.ajax({
        url: '/servidorApi/getServidores/',
        type: 'get',
        dataType: 'json',
        async: false,
        success: function(data) {
            json = data;
        } 
    });
    var html;
    $.each(json, function(){
        html = '<a href="/servidor/'+this['id']+'/">'+this['nombre'] + ' ' +this['apellidoPaterno'] + ' ' + this['apellidoMaterno'] + '</a> ';
        $('#js-servidoresList').append(html);
    });
}