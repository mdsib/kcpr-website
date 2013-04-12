$(window).scroll(function(){
    if (document.body.scrollTop >= 95)
    {
        $("div.menu-container").css({position:'fixed',top:'0'});
        $("div.play_button").css({position:'fixed',top:'-1',left:''});
        //$("div.logo").css({position:'fixed',top:'0',left:'0'});
        //document.getElementById('logo').height = 31;
    }
    else
    {
        $("div.menu-container").css({position:'',top:''});
        $("div.play_button").css({position:'absolute',top:'85',left:''});
        //$("div.logo").css({position:'absolute',top:'',left:''});
        //document.getElementById('logo').height = 75;
    }
});
