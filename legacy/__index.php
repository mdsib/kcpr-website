<title> KCPR - HOME </title>

<?php
include "php/ajax_handler.php";

function print_content()
{
?>
      <div id="ajax_content" class="border-module">
      <div class="content">
<?php
   require_once('./php/simplepie/autoloader.php');
   $feed = new SimplePie();
   $feed->set_feed_url ('http://kcprslo.wordpress.com/feed');
   $feed->init();
   $feed->handle_content_type();

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
               <?php echo "<div class='post_body'>".$item->get_description()."This is a lot alot alot laot laot laotlal fj ajlfj lsfljalfjsal jfsaflsa jfl jsafjsaf jlsa jfljsalfjsalf jlsajfljsa lfjsalf jsal jflsa jfljsalf jsal jflsa jflsa fjsa lfdsalkjfdskfj lkdsf kjds nflsdl nsnf sdfdsj flksdf jds jfds ljfkhdslkf hjdsal hfsaf lhjf hieaf iusahdfli uahefk jabsfl kjbsaflk jshelkf jldsak wkeanf lasdnf lkajesnf lkudsanfc kjewnf lusandf lkjdsalkf jbewaf lkjdslkjf dsak jkdsf hlksa flkjawehfl kf kjhewa hjlkjdsa flkwhjef lkjdsahf lkjewahf lkhf lkhfe lksajfl khewalkf jdsalk hjwelkf hjsalkdf hjwalke hfkdsajflkafl kjsadhf lkjewhf lkjfdsalk hjwe hjsaldk lwqflkjsahflkjwhefiwaufidsahflkjdsahfjdhfj hfj hf jh jh jhf jhf jhfj hfj hjfh jf f hf hkfsj hslkjf hlkdsajfh lkjhfdslk jhdsafj hlkkjhfdsal kjfdsa khjfdsalk hjfdsa lkjhfdsa kjhfds lkhjfdskj fdsa lkjdsaf hjdsakf jshf ljdsaf kjhf ljsf lkjdshf lkfkjshfjdsahflk jlf hlkfds hsakjfd lskjd hflksaf jksadhf lkjdsaf lk hsadlf kjdsalkjf hdsaf hdslkj hsahf lksdfh lkdsajf lot more text</div>"; ?>

            </div>
            <?php endforeach ?>
         </div>
         </div>
<?php
}
?>
