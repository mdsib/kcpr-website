<html>
<title>KCPR 91.3 SLO - Charts and also Adds</title>
<?php require_once('php/autoloader.php'); // includes simplepie (the rss parser)
$feed = new SimplePie();
$feed->set_feed_url('http://kcpradds.blogspot.com/feeds/posts/default?alt=rss'); //rss url goes here
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

	<?php foreach ($feed->get_items(0) as $item)://this is where the magic happens. its outputs the blog into the center colomn. Which actually has the left and right colomns in it. Cool huh?
	?> 
			<div class="item">
				<h2><?php echo $item->get_title(); ?></h2>
				<h3><small><?php echo $item->get_date('F j Y '); ?></small></h3>
				<description><?php echo $item->get_description(); ?></description>
				<br>
		</div>
	<?php endforeach; ?>
<?php include ('includes/footer.php'); ?>
</div>
</div>
</div>
</body>