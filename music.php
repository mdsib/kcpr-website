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
?>

<?php

   function print_content()
   { ?>
      <div id="content" class="border-module">
         <div id="new_music">
            
<?php  
   }
?>
