

<div id="news" class="content">
<?php

$blog = simplexml_load_file("../xml/blog.xml", 'SimpleXMLIterator');

foreach($blog as $post) {
   echo "<div class='post'>";
   echo "<div class='post_heading'>";
   echo "<date>".$post->date." at ".$post->time."</date>";
   echo "<post_title>".$post->title."</post_title>";
   echo "</div>";
   echo "<a target='_blank' href='".$post->image."'><img src='".$post->image."'></img></a>";
   echo $post->text;
   echo "<div class='post_footer'></div>";
   echo "</div>";
}?>
   </div>

</div>

