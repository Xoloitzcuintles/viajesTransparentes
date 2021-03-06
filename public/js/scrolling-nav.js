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
$(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 500) {
            $('#topage').fadeIn();
        } else {
            $('#topage').fadeOut();
        }
    });
    
    $('#topage').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});
$(function() {
    getServidoresToHome();
});
getServidoresToHome = function () {
    var json = null;
    var base_url = $("#base_url").val();
    console.log(base_url);
    $.ajax({
        url:  base_url+'/servidorApi/getServidores',
        type: 'get',
        dataType: 'json',
        async: false,
        success: function(data) {
            json = data;
        } 
    });
    var html;
    $.each(json, function(){
        html = '<li><a href="'+base_url+'/servidorProfile/'+this['id']+'">'+this['nombre'] + ' ' +this['apellidoPaterno'] + ' ' + this['apellidoMaterno'] + '</a></li> ';
        $('#js-servidoresList').append(html);
    });
}
