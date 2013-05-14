</html>
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
         <div id="pledge_title"><cursive>forty-fifth spectacular</cursive><br></font>PLEDGE DRIVE</div>
      <?php print_thermometer(); ?>
      </div>
      <div id="content">
           <div id = "donate_window">
               <div id="donate_description">
                  <h3>HELP US OUT!</h3><br>
                  $10: Get a coffee Mug<br>
                  $15: Get a tshirt<br>
                  $20: Get a ??? ;)<br>
               </div>
               <div id="donate_button">
                  DONATE
               </div>
           </div>
      <!--thermometer begins here -->
      <!--thermometer ends here -->
<div id="pledge_video">
<iframe width="700" height="420" src="http://www.youtube.com/embed/wDCLgTti7xk" frameborder="0" allowfullscreen></iframe>
</div>

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="TZM967EYXCSQL">
<table>
<tr><td><input type="hidden" name="amount">KCPR Annual Pledge Drive</td></tr><tr><td><select name="amount">
        <option value="10.00">Donation . . $10.00 USD</option>
        <option value="15.00">Donation . . $15.00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
      </div>
<?php
   }
?>
