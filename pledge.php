<title> KCPR - HOME </title>

<!-- web browsers like css here instead of in php files -->
<head>
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/pledge.css" />
<script type="text/javascript" src="js/jQuery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/goal.js"></script>
<script type="text/javascript" src="js/shit.js"></script>
</head>
<!-- web browsers like css here instead of in php files -->

<?php
   include "php/ajax_handler.php"; //this manages ajax stuff and includes
                                   //functions for printing info on the
                                   //page like header and footer.


//the page's content goes here. everything besides header and footer!!
//always make sure this is enclosed in:
//                <div id="content" class="border-module">
//                   ...
//                   ...
//                </div>
   function print_thermometer()
   {
      $current = 500;
      echo "<div id = 'thermometer_container'>";
      echo "<div id = 'thermometer_progress' style='width:".(($current / 5000) * 100)."%'>".$current."</div>";
      echo "</div>";
   }

   function print_content()
   { 
?>
      <div id="ajax_content" class="border-module">
      <div id="pledge_title_area"> 
         <div id="pledge_title"><cursive>45th anniversary edition</cursive><br></font>PLEDGE DRIVE</div>
      <?php print_thermometer(); ?>
         <div id="donate_button">
            DONATE AND GET COOL STUFF
         </div>
      </div>
      <div class="content" id="pledge_content">
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
</div>
<?php
   }
