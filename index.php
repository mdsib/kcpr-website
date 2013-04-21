<title> KCPR - HOME </title>

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
            <?php
               require_once('./php/simplepie/autoloader.php');
               $feed = new SimplePie();
               $feed->set_feed_url ('http://kcprslo.wordpress.com/feed');
               $feed->init();
               $feed->handle_content_type();
               //initializing rss parser. soon replacing with wordpress

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
            <?php endforeach ?> 
         </div>
   <?php
   }
?>
