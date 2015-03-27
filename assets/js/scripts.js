$(document).ready(function() {

    $("#styletester-show-sizesoprtions").click(function(){
        $("#styletester-menu-sizes").toggleClass("visible");
        $("#styletester-menu-docs").removeClass("visible");
    });
    $("#styletester-show-docs").click(function(){
        $("#styletester-menu-docs").toggleClass("visible");
        $("#styletester-menu-sizes").removeClass("visible");
    });
    $("#styletester-sizes-xs").click(function(){
        $("#styletester-content-wrapper").toggleClass("styletester-xs").removeClass("styletester-s styletester-m styletester-l styletester-xl styletester-f");
    });
    $("#styletester-sizes-s").click(function(){
        $("#styletester-content-wrapper").toggleClass("styletester-s").removeClass("styletester-xs styletester-m styletester-l styletester-xl styletester-f");
    });
    $("#styletester-sizes-m").click(function(){
        $("#styletester-content-wrapper").toggleClass("styletester-m").removeClass("styletester-xs styletester-s styletester-l styletester-xl styletester-f");
    });
    $("#styletester-sizes-l").click(function(){
        $("#styletester-content-wrapper").toggleClass("styletester-l").removeClass("styletester-xs styletester-s styletester-m styletester-xl styletester-f");
    });
    $("#styletester-sizes-xl").click(function(){
        $("#styletester-content-wrapper").toggleClass("styletester-xl").removeClass("styletester-xs styletester-s styletester-m styletester-l styletester-f");
    });
    $("#styletester-sizes-f").click(function(){
        $("#styletester-content-wrapper").toggleClass("styletester-f").removeClass("styletester-xs styletester-s styletester-m styletester-l styletester-xl");
    });
    $("#styletester-show").click(function(){
        $('#styletester-body').toggleClass("showmenu");
    });
    $(".styletester-code-button").click(function(){
        $(this).parent().parent().find(".styletester-code").toggleClass("visible");
    });
});