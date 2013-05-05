<?php require_once ('./php/simplepie/autoloader.php');
      $feed = new SimplePie();
      $feed->set_feed_url('http://kcprslo.wordpress.com/feed');
      $feed->init();
      $feed->handle_content_type();
      echo date('w');
?>
