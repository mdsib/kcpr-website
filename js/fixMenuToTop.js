$(window).scroll(function(){
    if (document.body.scrollTop >= 95)
    {
        $("div.menu-container").css({position:'fixed',top:'0'});
        $("div.play_button").css({position:'fixed',top:'5'});
    }
    else
    {
        $("div.menu-container").css({position:'',top:''});
        $("div.play_button").css({position:'absolute',top:'85'});
    }
});
