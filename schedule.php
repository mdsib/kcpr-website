<title> KCPR - SCHEDULE </title>

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

   function print_calendar_time()
   { 
     $times = array(
         "1-4 am",
         "4-7 am",
         "7",
         "8",
         "9",
         "10",
         "11",
         "12 pm",
         "1",
         "2",
         "3",
         "4",
         "5",
         "5:30",
         "6",
         "7",
         "8",
         "9",
         "10",
         "11",
         "12 am",
      );
  
   echo "<div class='calendar_times'>";
   foreach ($times as $time)
   {
      echo "<div class='time'>".$time."</div>";
   }
   echo "</div>";
   }
      

   function print_content()
   { 
     $auto1 = array (
     "title" => "", 
     "length" => 1, 
     "format" =>"auto");
     $auto2 = array (
     "title" => "", 
     "length" => 2, 
     "format" =>"auto");
     $auto3 = array (
     "title" => "", 
     "length" => 3, 
     "format" =>"auto");
     $muzicDotNet = array (
        "title" => "", 
        "length" => 1, //in number of half hours
        "format" => "special",
     ); 
     $democracyNow = array(
        "title" => "Free Speech Radio", 
        "length" => 1, //in number of half hours
        "format" => "news",
     ); 
     $gettingitIn = array(
        "title" => "Getting It In", 
        "length" => 1, //in number of half hours
        "format" => "talk",
     ); 
     $bobak = array(
        "title" => "Bobak's Graveyard", 
        "length" => 1, //in number of half hours
        "format" => "regular",
     ); 
     $bobakR = array(
        "title" => "Bobak's Regular Format", 
        "length" => 3, //in number of half hours
        "format" => "regular",
     ); 
  
     $monday = array(
        $bobak,
        $bobak,
        $auto3,
        $bobakR,
        $democracyNow,
        $bobakR,
        $auto3,
        $muzicDotNet,
        $bobakR,
        $gettingitIn,
     );
     $tuesday = array(
        $gettingitIn,
        $gettingitIn,
        $gettingitIn,
        $gettingitIn,
        $democracyNow,
        $gettingitIn,
        $gettingitIn,
        $gettingitIn,
        $gettingitIn,
        $gettingitIn,
        $gettingitIn,
        $bobak,
        $gettingitIn,
        $auto1,
        $bobak,
        $democracyNow,
        $bobak,
        $gettingitIn,
        $muzicDotNet,
     );
     $dayNames = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
     $days = array($monday, $tuesday);
     //days->day->show->info
     //$days [0-6]  [0-?]   [0,1,2]
  
        echo '<div id="content" class="border-module">';
        print_calendar_time();
        for ($d=0; $d<2; $d++)
        {  
           echo "<div class='day'><div class='dayName'>".$dayNames[$d]."</div>";
           foreach ($days[$d] as $show)
           {
              echo "<div class='".$show["format"]."' class='schedule_show' style='height:".($show["length"] * 60)."'>".$show["title"]."</div>";
           }
           echo "</div>";
        }
        echo "</div>";
   }
?>
