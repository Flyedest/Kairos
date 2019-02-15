function blackMode(){
    if($("#toggle-black-mode").hasClass("on")){
        $("#toggle-black-mode").removeClass("on")
    } else{
        $("#toggle-black-mode").addClass("on");
    }
    if($("#toggle-black-mode").hasClass("on")){
        $("body").css("background-image","url(/img/fundo-dark.png)");
        $(".menu-scroll").add(".div-drop").addClass("dark-mode");
        $(".navbar-brand-scroll").addClass("white");
        $("menuitem").addClass("white");
    }else{
        $("body").css("background-image","url(/img/fundo2.png)");
        $(".menu-scroll").add(".div-drop").removeClass("dark-mode");
        $(".navbar-brand-scroll").removeClass("white");
        $("menuitem").removeClass("white");
    }
}
