<?php
function print_thermometer()
{
   $current = 500;
   echo "<div id = 'thermometer_container'>";
   echo "<div id = 'thermometer_progress' style='width:".(($current / 5000) * 100)."%'>".$current."</div>";
   echo "</div>";
}?>

<div id="pledge_title_area">
   <div id="pledge_title"><cursive>45th anniversary edition</cursive><br>PLEDGE DRIVE</div> <?php print_thermometer(); ?>
<div id="donate_button">
   <a href="#footer">
   DONATE AND GET COOL STUFF
   </a>
   </div>
   </div>
   <!--thermometer begins here -->
   <!--thermometer ends here -->
   <div id="pledge_video">
   <iframe width="700" height="420" src="http://www.youtube.com/embed/wDCLgTti7xk" frameborder="0" allowfullscreen></iframe>
   <p> This week, we are asking our loving community members and listeners to help us keep our station running smoothly. The facts are: We recieve x dollars from blah. We are planning on buying new equipment for remote broadcasting to up our quality and diversity of coverage. You could hear live shows, interviews, and much more from KCPR! We're also looking to upgrade a few parts in our station and perform general maintenence work. We would love your support. Really!<br><br>

   To show you how much we care, we'll give you some cool stuff in return.<br><br>


   <img class="pledge_gift" src="/images/pledge/kcpr_mug.jpg" alt="KCPR mug"></img>
   <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
   <input type="hidden" name="cmd" value="_xclick">
   <input type="hidden" name="business" value="tbourne@calpoly.edu">
   <input type="hidden" name="lc" value="US">
   <input type="hidden" name="item_name" value="Donation">
   <input type="hidden" name="button_subtype" value="services">
   <input type="hidden" name="no_note" value="0">
   <input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynow_LG.gif:NonHostedGuest">
   <!--table>
   <tr><td><input type="hidden" name="on0" value="Value">Donate</td></tr><tr><td>
   <select name="os0">
   <option value="Option 1">$5.00</option>
   <option value="Option 2">$10.00</option>
   <option value="Option 3">$25.00</option>
   <option value="Option 4">$50.00</option>
   <option value="Option 5">$100.00</option>
   <option value="Option 6">$250.00</option>
   </select> </td></tr>
   </table-->
   <div class="prize">
   <div class="donate_amount"><input type='radio' name='os0' value="Option 1">5.00<br></div>
   Giving just for the skae of giving. Thanks for your support, we really appreciate it!
   </div>

   <div class="prize">
   <div class="donate_amount"><input type='radio' name='os0' value="Option 2">10.00<br></div>
   Get a tote bag, shark bottle opener, and magnet.
   </div>

   <div class="prize">
   <div class="donate_amount"><input type='radio' name='os0' value="Option 3">25.00<br></div>
   Get some KCPR sunglasses, a magnet and a bumper sticker.
   </div>

   <div class="prize">
   <div class="donate_amount"><input type='radio' name='os0' value="Option 4">50.00<br></div>
   Get an exclusive KCPR mug, bumper sticker, bottle opener, and tote bag. On top of that, you get a DJ love note, written personally and with love just for you. Hang it on your wall, frame it, keep it safe and close to your heart. <3
   </div>

   <div class="prize">
   <div class="donate_amount"><input type='radio' name='os0' value="Option 5">100.00<br></div>
   Get everything from from previous rewards, and a personalized mix CD! Give us three adjectives and your name and we'll come up with something that will shake your booty off, or maybe something that will cause you to relax! It's a mystery CD for an awesome supporter.

   </div>

   <div class="prize">
   <div class="donate_amount"><input type='radio' name='os0' value="Option 6">250.00<br></div>
   <div class="donate_amount"><input type='radio' name='os0' value="Option 7">500.00<br></div>
   OMG! We literally LOVE you! To prove it, you can get everything from previous rewards, a personally died Tshirt, a hug from your favorite DJ and a guest spot on their show! A lifechanging experience. Only donate this much if you are ready to change your life in a positive way.
   </div>

   <input type="hidden" name="currency_code" value="USD">
   <input type="hidden" name="option_select0" value="Option 1">
   <input type="hidden" name="option_amount0" value="5.00">
   <input type="hidden" name="option_select1" value="Option 2">
   <input type="hidden" name="option_amount1" value="10.00">
   <input type="hidden" name="option_select2" value="Option 3">
   <input type="hidden" name="option_amount2" value="25.00">
   <input type="hidden" name="option_select3" value="Option 4">
   <input type="hidden" name="option_amount3" value="50.00">
   <input type="hidden" name="option_select4" value="Option 5">
   <input type="hidden" name="option_amount4" value="100.00">
   <input type="hidden" name="option_select5" value="Option 6">
   <input type="hidden" name="option_amount5" value="250.00">
   <input type="hidden" name="option_select6" value="Option 7">
   <input type="hidden" name="option_amount6" value="500.00">
   <input type="hidden" name="option_index" value="0">
   <input type="image"
   src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg"
   border="0"
   name="submit"
   alt="PayPal - The safer, easier way to pay online!">
   <!--img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"-->
   <img alt="" border="0" src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" width="1" height="1">

   </form>
