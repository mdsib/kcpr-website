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
   <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:300' 
         rel='stylesheet' 
         type='text/css'>
   <link rel="stylesheet" type="text/css" href="css/main.css">
   </head>
   <body>
      <div class="main">
         <div class="heading">
            <div class="logo"><a class="ajax-link" href="index.php"><img class="logo" src="images/svg/salmon_kcpr_horiz.svg" height=100px></img></a>
            </div>
            <div class="play_button">
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
               <p>here's one item in the blog. wow isn't it cool? it's too cool for school because it doesn't need it but still goes awyways. To learn and 'be productive' and 'do something with itself'. After school it doesn't think about what it wants to do for the rest of its life because it is doing other things like starting a garden and not bitching. blah blah blah balh blah this is fun just kidding or am i youll never know or will you peirce this shield with our brain and find out what it's all about. afjdkjf ajfk jdf jakjfd fkdja kfjd fkjd akjfd jfd a fjdj fjaj fk jdjfkjkafjdkj f jkdjf.
               </p>
               <p>
               some more paragraphs to tide you over until the next one. I need this to scrool so i'm typing a lot of words really fast until I think I might have enough of them. Maybe I should just keep typing forever until the world stops turning or stops and thn starts again after a break because we all need breaks and the world is an 'us' just like we are like it YUO KNOW?
               </p>
               <p>
               This is a repeat of the last paragraph for laziness and affect/effect. some more paragraphs to tide you over until the next one. I need this to scrool so i'm typing a lot of words really fast until I think I might have enough of them. Maybe I should just keep typing forever until the world stops turning or stops and thn starts again after a break because we all need breaks and the world is an 'us' just like we are like it YUO KNOW?
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
   
