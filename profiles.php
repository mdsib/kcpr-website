<html>
<title>KCPR 91.3 SLO - DJ Profiles</title>
<?php require_once('php/autoloader.php'); // includes simplepie (the rss parser)
$feed = new SimplePie();
$feed->set_feed_url('http://kcprblog.blogspot.com/feeds/posts/default?alt=rss'); //rss url goes here
$feed->init(); // Running SimplePie.
$feed->handle_content_type();
?>
<body>
<?php include ('includes/header2.php'); //this gets the header in. use this line at the beginning of every page! it's easy and consistant when we want to edit it late in some other life when we get sick of the logo or need a new image or something.. ya dig?
?>
<div id="parent">
<div id="colleft">
		<?php include ('includes/colleft.php'); ?>
</div>
<div id="colcenter">
<div class="item">
<h2>This page is UNDER CONSTRUCTION. </h2><br>
 Sorry. But don't worry it will eventally be awesome!</div>
<?php include ('includes/footer.php'); ?>
</div>
</div>
</div>
</body>