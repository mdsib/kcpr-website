$(window).load(function() {
    $('div.post').each(function() {
        $(this).height($(this).find('img').height() +
        $(this).find('h2').height() +
        (2 * $(this).find('date').height())); 
    });
});


$(window).scroll(function(){
    //document.getElementById('heading').style.left=document.body.scrollLeft;
    if (document.body.scrollTop >= 95)
    {
//        $("div.menu-container").css({position:'fixed',top:'0',backgroundPosition:"35 35"});
//        document.getElementById('menu_container').style.backgroundPosition="0px " + (190 + document.body.scrollTop);
        document.getElementById('menu_container').style.position="fixed";
        document.getElementById('menu_container').style.top = "0";
        document.getElementById('heading').style.top = "-95";
        //$("div.play_button").css({position:'fixed',top:'-1',left:''});
        //$("div.logo").css({position:'fixed',top:'0',left:'0'});
        //document.getElementById('logo').height = 31;
    }
    else
    {
//        document.getElementById('menu_container').style.backgroundPosition="0px " + (190 + document.body.scrollTop);
        document.getElementById('heading').style.top=-document.body.scrollTop;
        document.getElementById('menu_container').style.position="fixed";
        document.getElementById('menu_container').style.top = 95 - document.body.scrollTop;
        //$("div.play_button").css({position:'absolute',top:'5',left:''});
        //$("div.logo").css({position:'absolute',top:'',left:''});
        //document.getElementById('logo').height = 75;
    }
});
