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
   <title>
      kcpr SLO deal with it
   </title>
   <head>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
      <script type="text/javascript" src="js/ajax-version-1.0.js"></script>
      <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:300' 
            rel='stylesheet' 
            type='text/css'>
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <div class="heading">
         <div class="logo"><a href="index.php"><img src="images/long_logo.jpg" width=300px></img></a>
         </div>
         <div class="play_button">
         </div>
         <div class="now_playing">
         Dudes with Cigars - Le Epic Defeat (Gnarwhal Gnonsense)
         </div>
      </div>
      <div class="menu">
         <div class="item">
            <a class="ajax-link" href="2ndpage.php">item 1</a>
         </div>
         <div class="item">
            <a class="ajax-link" href="schedule.php">item 2</a>
         </div>
         <div class="item">
            <a class="ajax-link" href="schedule.php">item 3</a>
         </div>
         <div class="item">
            <a class="ajax-link" href="schedule.php">item 4</a>
         </div>
      </div>
   </head>

<?php

}
function print_content()
{

?>
<div id="content" class="border-module">
   <body>
   this is one coooool page
   </body>
</div>
</html>
<?php
}
?>
   
