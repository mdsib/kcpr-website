<?php
 
        // if the page is requested by AJAX
        if ( isset($_REQUEST['ajax']) && $_REQUEST['ajax'] == "true" ){
                print_content();
        }
        else {
                print_header();
                print_content();
        }
 
function print_header()
{
?>
<html>
   <head>
   <audio id="streamer" name="media"><source src="http://129.65.35.106:8000/KCPRMP3" type="audio/mpeg"></audio>
      <title>
         kcpr SLO deal with it
      </title>
      <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
      <script type="text/javascript" src="js/ajax-version-1.0.js"></script>
      <script type="text/javascript" src="js/fixMenuToTop.js"></script>
      <script type="text/javascript" src="js/playButton.js"></script>
      <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:300' 
            rel='stylesheet' 
            type='text/css'>
      <link rel="stylesheet" type="text/css" href="css/main.css">
   </head>
   <body>
      <div class="main">
         <div class="heading">
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
            Dudes with Cigars - Le Epic Defeat (Gnarwhal Gnonsense)
            </div>
         </div>
         <div id="menu_container">
            <div class="menu">
               <div class="item">
                  <a class="ajax-link" class="menu_link" href="anotherpage.php">SCHEDULE</a>
               </div>
               <div class="item">
                  <a class="ajax-link" class="menu_link" href="2ndpage.php">MUSIC</a>
               </div>
               <div class="item">
                  <a class="ajax-link" class="menu_link" href="schedule.php">EVENTS</a>
               </div>
               <div class="item">
                  <a class="ajax-link" class="menu_link" href="schedule.php">JOIN KCPR</a>
               </div>
            </div>
         </div>

<?php

}
function print_content()
{

?>
      <div id="content" class="border-module">
         <div class="main_content">
         some divs and stuff will go here.
            <?php
                  require_once('./php/simplepie/autoloader.php');
                  $feed = new SimplePie();
                  $feed->set_feed_url ('http://kcprslo.wordpress.com/feed');
                  $feed->init();
                  $feed->handle_content_type();

                  foreach ($feed->get_items(0,5) as $item):
            ?>

            <div class="post">
               <div class="post_heading">
                  <date>
                     <?php echo $item->get_date('j F Y | G:i a'); ?>
                  </date>
                  <h2>
                     <?php echo $item->get_title(); ?>
                  </h2>
               </div>
               <?php if ($enc = $item->get_enclosure(1))
                        echo "<img class='post_image' src=" . ($item->get_enclosure(1)->get_link()) . "></img>"; ?>
               <?php echo $item->get_description(); ?>
            </div>
            <?php endforeach ?> and that's all
         </div>
      </div>
   </div>
</body>
</html>
<?php
}
?>
   
