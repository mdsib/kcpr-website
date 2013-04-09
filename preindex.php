<html>
<title>KCPR 91.3 SLO - Home Page</title>
<?php require_once('php/autoloader.php'); // includes simplepie (the rss parser)
$feed = new SimplePie();
$feed->set_feed_url('http://kcprblog.blogspot.com/feeds/posts/default?alt=rss'); //rss url goes here
$feed->init(); // Running SimplePie.
$feed->handle_content_type();
?>
<body>
<?php include ('includes/header.php'); //this gets the header in. use this line at the beginning of every page! it's easy and consistant when we want to edit it late in some other life when we get sick of the logo or need a new image or something.. ya dig?
?>
<div style="overflow:hidden">
<div id="menu">
<span class="menu">
		<ul class="menu">
			<li class="menu">Schedule</li> 
			<li class="menu"><a class="menu" href="http://www.kcpr.org/Schedule"> Charts n' Adds </a></li> 
			<li class="menu"><a href="http://www.kcpr.org/Schedule"> The Crew </a></li> 
			<li class="menu">Listen!</li> 
			<li class="menu">Contact Us</li> 
			<li class="menu">About the Station</li> 
			<li class="menu">?????</li> 
			
		</ul>
	</span>
</div>
<div id="colcenter">
<div id="colleft">Welcome to KCPR's new website! It's:<ul><li>UPDATABLE!</li><li>ADA COMPLIANT!</li><li>and more?</li></div>
<div id="colright"> hello </div>
	<?php foreach ($feed->get_items(0,10) as $item)://this is where the magic happens. its outputs the blog into the center colomn. Which actually has the left and right colomns in it. Cool huh?
	?> 
			<br>
			<div class="item">
				<h2><?php echo $item->get_title(); ?></h2>
				<h3><small><?php echo $item->get_date('F j Y '); ?></small></h3>
				<description><?php echo $item->get_description(); ?></description>
				<br>
		</div>
	<?php endforeach; ?>
</div>
<?php include ('includes/footer.php'); ?>
</div>
</body>