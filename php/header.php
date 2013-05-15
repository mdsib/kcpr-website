<?php
function print_header($title)
{
?>
<html>
   <head>
      <!-- web browsers like css here instead of in php files -->
      <link href='http://fonts.googleapis.com/css?family=Lato' 
         rel='stylesheet' 
         type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:300'
         rel='stylesheet'
         type='text/css'>
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link rel="stylesheet" type="text/css" href="css/schedule.css">
      <!-- web browsers like css here instead of in php files -->
      
      <audio preload="false" id="streamer" name="media">
         <source src="http://129.65.35.106:8000/KCPRHIGH" type="audio/aac">
         <source src="http://129.65.35.106:8000/KCPRMP3" type="audio/mpeg">
      </audio>

      <link rel="shortcut icon" href='favicon.ico'/>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script type="text/javascript" src="js/ajax-version-1.0.js"></script>
      <script type="text/javascript" src="http://4nf.org/history.min.js"></script>

   <script type="text/javascript" src="js/fixMenuToTop.js"></script>

   <script type="text/javascript">
   function onclick() {
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
   }
   </script>

   </head>
   <body>
      <div class="main">
         <div id="heading">
            <div class="logo">
               <a class="ajax-link" href="index.php">
               <img class="logo"
                  id ="logo"
                  src="images/svg/kcpr_final_logo_horiz_color_nobg.svg" height=82px>
                  </img>
                  </a>
            </div>
            <a href="javascript:onclick()">
            <div id="play_button">
            </div></a>
            <div class="now_playing">
            <show>ON THE AIR: OPEN SORCERY</show><br>
            <artist>Dudes with Cigars</artist> -
            <song>Le Epic Defeat</song>
            </div>
         </div>
         <div id="fake_header"></div>
         <div id="menu_container">
            <div class="menu">
               <div class="item">
                  <a class="ajax-link" class="menu_link" href="index.php">NEWS</a>
               </div>
               <div class="item">
                  <a class="ajax-link" class="menu_link" href="music.php">MUSIC</a>
               </div>
               <div class="item">
                  <a class="ajax-link" class="menu_link" href="schedule.php">SCHEDULE</a>
               </div>
               <div class="item">
                  <a class="ajax-link" class="menu_link" href="join.php">JOIN</a>
               </div>
               <div class="item">
                  <a class="ajax-link" class="menu_link" href="pledge.php">DONATE</a>
               </div>
            </div>
         </div>
<?php } ?>
