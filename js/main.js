$(document).ready(function() {
   $(".item").click(function () {
      var url = $(this).attr("url");
      var title = $(this).attr("title");
      var php = "php"+url+".php";

      $.ajax( {
         type: "GET",
         url: php
      }).done(function(data) {
         window.history.pushState(data, "", "");
         $("#ajax_content").html(data);
      });
      window.scrollTo(0,95);
   });

   window.onpopstate = function(e) {
      if(e.state) {
         $("#ajax_content").html(e.state);
         //document.title = e.state.pageTitle;
      }
   };

   $.ajax( {
      type: "GET",
      url: "php/news.php"
   }).done(function(data) {
      $("#ajax_content").html(data);
   });
   //alert(window.location.pathname);

//   $("#play_button").click(function() {
//      alert("play");
//      $("#streamer").get(0).play();
//      alert(document.getElementById('streamer').paused);
//      //alert($("#streamer").paused);
//   });
//
});


$(window).scroll(function(){
   var menu = document.getElementById('menu_container');
   var head = document.getElementById('heading');
   if (document.body.scrollTop >= 95)
   {
      menu.style.position="fixed";
      menu.style.top = "0";
      head.style.top = "-96";
   }
   else
   {
      head.style.top=-document.body.scrollTop;
      menu.style.position="fixed";
      menu.style.top = 95 - document.body.scrollTop;
   }
});

/*function onclick() {
   if (document.getElementById('streamer').paused) {
      document.getElementById('play_button').style.border='35px solid #009999';
      document.getElementById('streamer').play();
   }
   else {
      document.getElementById('streamer').load();
      document.getElementById('play_button').style.borderBottom='35px solid transparent';
      document.getElementById('play_button').style.borderRight='35px solid transparent';
      document.getElementById('play_button').style.borderTop='35px solid transparent';
      document.getElementById('play_button').style.borderLeft='45px solid #009999';
   }
}*/
