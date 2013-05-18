$(document).ready(function() {
   $(".item").click(function () {
      location.hash = $(this).attr("url");
   });

   window.onhashchange = function() {
      var $hash = (window.location.hash).replace("#","");
      var $php = "php/"+$hash+".php";
      alert($php);

      $.ajax( {
         type: "GET",
         url: $php
      }).done(function(data) {
         $("#content").html(data);
      });
   };

   window.location.hash = "#news";
});

/*$(window).scroll(function(){
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

  $(onclick() {
  if (document.getElementById('streamer').paused)
  {
  document.getElementById('play_button').style.border='35px solid #009999';
  document.getElementById('streamer').play();
  }
  else
  {
  document.getElementById('streamer').load();
  document.getElementById('play_button').style.borderBottom='35px solid transparent';
  document.getElementById('play_button').style.borderRight='35px solid transparent';
  document.getElementById('play_button').style.borderTop='35px solid transparent';
  document.getElementById('play_button').style.borderLeft='45px solid #009999';
  }
  }*/
