<title> KCPR - HOME </title>

<?php include "php/ajax_handler.php";

function print_content() {
?>
   <div id="content" class="border-module">

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
   <input type='radio' name='os0' value="Option 1">5.00<br>
   <input type='radio' name='os0' value="Option 2">10.00<br>
   <input type='radio' name='os0' value="Option 3">25.00<br>
   <input type='radio' name='os0' value="Option 4">50.00<br>
   <input type='radio' name='os0' value="Option 5">100.00<br>
   <input type='radio' name='os0' value="Option 6">250.00<br>
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
   <input type="hidden" name="option_index" value="0">
   <input type="image"
   src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg"
   border="0"
   name="submit"
   alt="PayPal - The safer, easier way to pay online!">
   <!--img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"-->
   <img alt="" border="0" src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" width="1" height="1">
   
   </form>

   </div>
<?php
}
?>
   <!--src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_LG.gif"-->
