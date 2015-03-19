$(document).ready(function(){

    $('iframe#st-iframe').iframeAutoHeight({debug: true});

    $('.st-show-second').click(function(){
        event.preventDefault();
        $(this).next('.st-second-menu').toggleClass('st-visible');
        $('.st-second-menu').not($(this).next()).removeClass('st-visible');
    });
    $('.st-show-third').click(function(){
        event.preventDefault();
        $(this).next('.st-third-menu').toggleClass('st-visible');
    });

});