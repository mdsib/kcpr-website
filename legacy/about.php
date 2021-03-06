<title> KCPR - ABOUT US </title>

<!-- web browsers like css here instead of in php files -->
<link href='http://fonts.googleapis.com/css?family=Lato' 
      rel='stylesheet' 
      type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:300' 
      rel='stylesheet' 
      type='text/css'>
<link rel="stylesheet" type="text/css" href="css/main.css">
<!-- web browsers like css here instead of in php files -->

<?php
   include "php/ajax_handler.php"; //this manages ajax stuff and includes
                                   //functions for printing info on the
                                   //page like header and footer.


//the page's content goes here. everything besides header and footer!!
//always make sure this is enclosed in:
//                <div id="content" class="border-module">
//                   ...
//                   ...
//                </div>

   function print_content()
   { 
?>
      <div id="content" class="border-module">
         <a href="http://cool.com/"><div id="left_button" class="text_button">
            Meet our DJs
         </div></a>
         <div class="text_button">
            Donate
         </div>
         <div id="right_button" class="text_button">
            Become a DJ
         </div>
         <img width=100% height=200px src="http://www.newtimesslo.com/images/cms/sized/Auction-11-27.jpg"></img>
         <p>
            KCPR is a stereo FM radio station broadcasting throughout the Central 
            Coast of California on 91.3 MHz. It is the college station of Cal Poly,
            in San Luis Obispo. We broadcast 24/7 online and on air. We play 
            music along with a few news and talk shows.
         </p>
         <p>
            The station is run by volunteer college students and community members. 
            We all do it from our love of music, our community, and the radio.
         </p>
         <p>
            We don't get much money from the university, so we ask community members 
            and listeners to donate. We'd like it if you did so we can keep broastcasting. 
            Every year we have a Pledge Drive, where you can bid on packages of neat items. 
            The money we make goes towards buying new equipment and music.
         </p>
         <p>
            We have been broadcasting since 1968.
         </p>
      </div>
<?php
   }
?>
