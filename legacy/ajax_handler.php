<?php 

include "php/header.php"; 

include "php/footer.php"; 

if ( isset($_REQUEST['ajax']) && $_REQUEST['ajax'] == "true" ){
   print_content();
}

else { 
   print_header();
   print_content();
   print_footer();
}
?>


