<?php
function print_thermometer()
{
   $current = 500;
   echo "<div id = 'thermometer_container'>";
   echo "<div id = 'thermometer_progress' style='width:".(($current / 5000) * 100)."%'>".$current."</div>";
   echo "</div>";
}?>

<div id="pledge_title_area">
   <div id="pledge_title"><cursive>45th anniversary edition</cursive><br>PLEDGE DRIVE</div> <!--?php print_thermometer(); ?-->
   <font size="15pt" color="#ddd">(DONATE AND GET COOL STUFF)</font>
   </div>
</div>
<div id="pledge" class="content">
   <div id="pledge_video">
   <iframe width="700" height="420" src="http://www.youtube.com/embed/wDCLgTti7xk" frameborder="0" allowfullscreen></iframe>
   <p> This week, we are asking our loving community members and listeners to help us keep our station running smoothly. The facts are: We recieve x dollars from blah. We are planning on buying new equipment for remote broadcasting to up our quality and diversity of coverage. You could hear live shows, interviews, and much more from KCPR! We're also looking to upgrade a few parts in our station and perform general maintenence work. We would love your support. Really!<br><br>

   To show you how much we care, we'll give you some cool stuff in return.<br><br>

   </div>

   <img class="pledge_gift" src="/images/pledge/kcpr_mug.jpg" alt="KCPR mug"></img>

   <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
   <input type="hidden" name="cmd" value="_xclick">
   <input type="hidden" name="business" value="tbourne@calpoly.edu">
   <input type="hidden" name="lc" value="US">
   <input type="hidden" name="amount" value="5.00">
   <input type="hidden" name="item_name" value="KCPR Donation 5.00">
   <input type="hidden" name="currency_code" value="USD">
   <input type="hidden" name="button_subtype" value="services">
   <input type="hidden" name="no_note" value="0">
   <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
   <button class="donate_button" type="submit" name="submit">DONATE $5</button><br>
   Giving just for the sake of giving. Thanks for your support, we really appreciate it!

   <input type="hidden" name="amount" value="10.00">
   <button class="donate_button" type="submit" name="submit">DONATE $10</button><br>
   Get KCPR-style items: A sturdy tote bag for groceries, shark shaped bottle opener, and a magnet to put somewhere special.<br>

   <input type="hidden" name="amount" value="15.00">
   <input type="hidden" name="item_name" value="KCPR Donation 15.00">
   <button class="donate_button" type="submit" name="submit">DONATE $15</button><br>
   Get everything from $10, plus KCPR apparel brand sunglasses to look rad on a hot day.<br>
   <input type="hidden" name="amount" value="25.00">
   <input type="hidden" name="item_name" value="KCPR Donation 25.00">
   <button class="donate_button" type="submit" name="submit">DONATE $25</button><br>
   Get KCPR stuff: Everything from $15, plus a sweet KCPR mug for loose leaf tea or Chemex coffee.<br>

   <input type="hidden" name="amount" value="50.00">
   <input type="hidden" name="item_name" value="KCPR Donation 50.00">
   <button class="donate_button" type="submit" name="submit">DONATE $50</button><br>
   On top of everything above, you get a DJ love note, written personally and with love just for you. Hang it on your wall, frame it, keep it safe and close to your heart.<br>

   <input type="hidden" name="amount" value="100.00">
   <input type="hidden" name="item_name" value="KCPR Donation 100.00">
   <button class="donate_button" type="submit" name="submit">DONATE $100</button><br>
   Get KCPR'd out with every KCPR item, a love note, and... A personalized mix CD! Give us three adjectives and your name and we'll come up with something that may shake your booty off. It's a mystery CD for an awesome supporter.<br>

   <input type="hidden" name="amount" value="250.00">
   <input type="hidden" name="item_name" value="KCPR Donation 250.00">
   <button class="donate_button" type="submit" name="submit">DONATE $250</button>
   <input type="hidden" name="amount" value="500.00">
   <input type="hidden" name="item_name" value="KCPR Donation 500.00">
   <button class="donate_button" type="submit" name="submit">or $500</button><br>
   <big><i>OMG!</i></big> We literally <big>LOVE</big> you!<br> To prove it, you can get everything from previous rewards, a personally dyed t-shirt, a hug from your favorite DJ, and a guest spot on their show! A lifechanging experience. Only donate this much if you are ready to change your life in a positive way.

   </form>
   </div>
