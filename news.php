<html>
   <title>KCPR - HOME</title>
   <head>

      <link href='http://fonts.googleapis.com/css?family=Lato'
      rel='stylesheet'
      type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:300'
      rel='stylesheet'
      type='text/css'>
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link rel="stylesheet" type="text/css" href="css/schedule.css">
      <link rel="stylesheet" type="text/css" href="css/pledge.css">
      <link rel="stylesheet" type="text/css" href="css/join.css">
      <link rel="shortcut icon" href='favicon.ico'/>
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>

   </head>

   <body>
      <div class="main">
         <div id="heading" style="position:absolute;">
            <div class="logo">
               <img class="logo"
               id ="logo"
               src="images/long_logo.jpg" height=76px>
               </img><br>
               SAN LUIS OBISPO, CA. 805-756-5277.
            </div>
              <div id="play_button">
            </div>
            <div id="pledge_banner">
               <a>IT'S PLEDGE WEEK! DONATE AND HELP US STAY ON AIR!</a>
            </div>
            <!--div class="now_playing">
            <show>ON THE AIR: OPEN SORCERY</show><br>
            <artist>Dudes with Cigars</artist> -
            <song>Le Epic Defeat</song>
            </div-->
         </div>
         <div id="fake_header"></div>
         <div id="menu_container">
            <div class="menu">
               <div class="item"><a href="news.php">NEWS</a></div>
               <div class="item"><a href="schedule.php">SCHEDULE</a></div>
               <div class="item"><a href="join.php">JOIN</a></div>
               <div class="item"><a href="about.php">ABOUT</a></div>
               <div class="item"><a href="pledge.php">PLEDGE</a></div>
            </div>
         </div>
<div id="news" class="content">
NOTE: If you are here, you probably have an old version of Internet Explorer. Consider upgrading for a better experience on this site and others.
<?php
$blog = simplexml_load_file("xml/blog.xml", 'SimpleXMLIterator');
foreach($blog as $post) {
   echo "<div class='post'>";
      echo "<div class='post_heading'>";
         echo "<date>".$post->date; 
         echo "<post_title>".$post->title."</post_title>";
      echo "</div>";
      echo "<a target='_blank' href='".$post->image."'><img src='".$post->image."'></img></a>";
      echo $post->text;
      echo "<div class='post_footer'></div>";
   echo "</div>";
}?>
   </div>

</div>
         <div id="footer">
            <a href="http://calpoly.edu">Cal Poly</a> > <a href="http://cla.calpoly.edu/jour">College of Liberal Arts: Journalism Department</a> > KCPR 91.3 FM
         </div>
      </div>
   </body>
</html>
