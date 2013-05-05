$(window).load(function() {
    $('div.post').each(function() {
        $(this).minHeight($(this).find('img').height() +
        $(this).find('h2').height() +
        (2 * $(this).find('date').height())); 
    });
});


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
