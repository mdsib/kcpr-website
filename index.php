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
            <div class="logo"><a class="ajax-link" href="index.php"><img class="logo" id ="logo" src="images/svg/kcpr_final_logo_horiz_color_nobg.svg" height=82px></img></a>
            </div>
            <div id="stream" class="play_button">
            </div>
            <div class="3d_menu_effect">
            </div>
            <div class="now_playing">
            Dudes with Cigars - Le Epic Defeat (Gnarwhal Gnonsense)
            </div>
         </div>
         <div class="menu-container">
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
            <div class="post">             
               <date>
                  cool date
               </date>
               <h2>
                  cool title goes here
               </h2>
               <p> iLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor volutpat leo, id aliquet purus faucibus et. Nullam lacinia lorem ac nibh consequat imperdiet. Sed leo libero, pretium sit amet dignissim sed, condimentum vel tellus. Sed auctor rhoncus ligula, id aliquet turpis venenatis non. Donec mollis nibh id justo interdum consectetur. Vivamus iaculis aliquet leo adipiscing placerat. Suspendisse laoreet elit sed dui varius non consequat tellus tincidunt. Mauris sed nibh a enim placerat scelerisque id ut enim. Curabitur dictum ornare diam, quis blandit erat pharetra quis.
               </p>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor volutpat leo, id aliquet purus faucibus et. Nullam lacinia lorem ac nibh consequat imperdiet. Sed leo libero, pretium sit amet dignissim sed, condimentum vel tellus. Sed auctor rhoncus ligula, id aliquet turpis venenatis non. Donec mollis nibh id justo interdum consectetur. Vivamus iaculis aliquet leo adipiscing placerat. Suspendisse laoreet elit sed dui varius non consequat tellus tincidunt. Mauris sed nibh a enim placerat scelerisque id ut enim. Curabitur dictum ornare diam, quis blandit erat pharetra quis.
               so
               </p>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor volutpat leo, id aliquet purus faucibus et. Nullam lacinia lorem ac nibh consequat imperdiet. Sed leo libero, pretium sit amet dignissim sed, condimentum vel tellus. Sed auctor rhoncus ligula, id aliquet turpis venenatis non. Donec mollis nibh id justo interdum consectetur. Vivamus iaculis aliquet leo adipiscing placerat. Suspendisse laoreet elit sed dui varius non consequat tellus tincidunt. Mauris sed nibh a enim placerat scelerisque id ut enim. Curabitur dictum ornare diam, quis blandit erat pharetra quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor volutpat leo, id aliquet purus faucibus et. Nullam lacinia lorem ac nibh consequat imperdiet. Sed leo libero, pretium sit amet dignissim sed, condimentum vel tellus. Sed auctor rhoncus ligula, id aliquet turpis venenatis non. Donec mollis nibh id justo interdum consectetur. Vivamus iaculis aliquet leo adipiscing placerat. Suspendisse laoreet elit sed dui varius non consequat tellus tincidunt. Mauris sed nibh a enim placerat scelerisque id ut enim. Curabitur dictum ornare diam, quis blandit erat pharetra quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor volutpat leo, id aliquet purus faucibus et. Nullam lacinia lorem ac nibh consequat imperdiet. Sed leo libero, pretium sit amet dignissim sed, condimentum vel tellus. Sed auctor rhoncus ligula, id aliquet turpis venenatis non. Donec mollis nibh id justo interdum consectetur. Vivamus iaculis aliquet leo adipiscing placerat. Suspendisse laoreet elit sed dui varius non consequat tellus tincidunt. Mauris sed nibh a enim placerat scelerisque id ut enim. Curabitur dictum ornare diam, quis blandit erat pharetra quis.
               T
               </p>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor volutpat leo, id aliquet purus faucibus et. Nullam lacinia lorem ac nibh consequat imperdiet. Sed leo libero, pretium sit amet dignissim sed, condimentum vel tellus. Sed auctor rhoncus ligula, id aliquet turpis venenatis non. Donec mollis nibh id justo interdum consectetur. Vivamus iaculis aliquet leo adipiscing placerat. Suspendisse laoreet elit sed dui varius non consequat tellus tincidunt. Mauris sed nibh a enim placerat scelerisque id ut enim. Curabitur dictum ornare diam, quis blandit erat pharetra quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor volutpat leo, id aliquet purus faucibus et. Nullam lacinia lorem ac nibh consequat imperdiet. Sed leo libero, pretium sit amet dignissim sed, condimentum vel tellus. Sed auctor rhoncus ligula, id aliquet turpis venenatis non. Donec mollis nibh id justo interdum consectetur. Vivamus iaculis aliquet leo adipiscing placerat. Suspendisse laoreet elit sed dui varius non consequat tellus tincidunt. Mauris sed nibh a enim placerat scelerisque id ut enim. Curabitur dictum ornare diam, quis blandit erat pharetra quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor volutpat leo, id aliquet purus faucibus et. Nullam lacinia lorem ac nibh consequat imperdiet. Sed leo libero, pretium sit amet dignissim sed, condimentum vel tellus. Sed auctor rhoncus ligula, id aliquet turpis venenatis non. Donec mollis nibh id justo interdum consectetur. Vivamus iaculis aliquet leo adipiscing placerat. Suspendisse laoreet elit sed dui varius non consequat tellus tincidunt. Mauris sed nibh a enim placerat scelerisque id ut enim. Curabitur dictum ornare diam, quis blandit erat pharetra quis.
               </p>
            </div>
            <div class="post">
               and here's another
            </div>
         </div>
      </div>
   </div>
</body>
</html>
<?php
}
?>
   
