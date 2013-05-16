<?php


include "php/ajax_handler.php";

function print_content() {


?>
   <div id="ajax_content" class="border-module">
   <div id="content">

<?php 
   $blog = simplexml_load_file("./xml/blog.xml", 'SimpleXMLIterator');
   
   foreach($blog as $post) {
      echo "<>".$post->date."</p>";
      echo "<p>".$post->time."</p>";
      echo "<p>".$post->author."</p>";
      echo "<p>".$post->text."</p>";
      echo "<br/>";
   }?>
   
   </div>
   </div>

<?php
}

?>

