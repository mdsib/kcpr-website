<?php // this manages ajax stuff. basically, it allows a reload
      // of the main content while keeping the header and footer
      // so the music can keep playing :)

        include "php/header.php"; //contains print_header function,
                                  //prints entire header no sweat

        include "php/footer.php"; //contains print_footer function,
                                  //prints footer no sweating involved
 
        // if the page is requested by AJAX, just print content of page
        if ( isset($_REQUEST['ajax']) && $_REQUEST['ajax'] == "true" ){
                print_content();
        }
        else { // else print everything. this happens when user first
               // enters site.
                print_header();
                print_content();
                print_footer();
        }
?>
 

