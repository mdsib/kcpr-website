$(window).scroll(function(){
    if (document.body.scrollTop >= 95)
    {
        document.getElementById('menu_container').style.position="fixed";
        document.getElementById('menu_container').style.top = "0";
        document.getElementById('heading').style.top = "-95";
    }
    else
    {
        document.getElementById('heading').style.top=-document.body.scrollTop;
        document.getElementById('menu_container').style.position="fixed";
        document.getElementById('menu_container').style.top = 95 - document.body.scrollTop;
    }
});
