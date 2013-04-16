<?php
function print_header($title)
{
?>
<html>
   <head>
      <audio preload="false" id="streamer" name="media"><source src="http://129.65.35.106:8000/KCPRMP3" type="audio/mpeg"></audio>
      <link rel="shortcut icon" href='/images/favicon.ico' />
      <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
      <script type="text/javascript" src="js/ajax-version-1.0.js"></script>
      <script type="text/javascript" src="js/fixMenuToTop.js"></script>
      <script type="text/javascript" src="js/playButton.js"></script>
   </head>
   <body>
      <div class="main">
         <div id="heading">
            <div class="logo"><a class="ajax-link" href="index.php">
               <img class="logo" id ="logo" src="images/svg/kcpr_final_logo_horiz_color_nobg.svg" height=82px></img></a>
            </div>
            <div id="play_button" onclick="
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
              
            "></div>
            <div class="now_playing">
            <show>ON THE AIR: OPEN SORCERY</show><br>
            <song>Dudes with Cigars//"Le Epic Defeat"</song>
            </div>
         </div>
         <div id="menu_container">
            <div class="menu">
               <div class="item">
                  <a class="ajax-link" class="menu_link" href="anotherpage.php">HOME/BLOG</a>
               </div>
               <div class="item">
                  <a class="ajax-link" class="menu_link" href="anotherpage.php">MUSIC</a>
               </div>
               <div class="item">
                  <a class="ajax-link" class="menu_link" href="2ndpage.php">SCHEDULE</a>
               </div>
               <div class="item">
                  <a class="ajax-link" class="menu_link" href="schedule.php">EVENTS</a>
               </div>
               <div class="item">
                  <a class="ajax-link" class="menu_link" href="2ndpage.php">LISTEN</a>
               </div>
            </div>
         </div>

<?php } ?>
