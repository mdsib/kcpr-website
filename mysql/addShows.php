<title> KCPR - ADD SHOW</title>

<!-- web browsers like css here instead of in php files -->
<link href='http://fonts.googleapis.com/css?family=Lato'
      rel='stylesheet'
      type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:300'
      rel='stylesheet'
      type='text/css'>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" 
href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<!-- web browsers like css here instead of in php files -->

<?php
include "php/ajax_handler.php"; //this manages ajax stuff and includes
//the page's content goes here. everything besides header and footer!!
//always make sure this is enclosed in:
//                <div id="content" class="border-module">
//                   ...
//                   ...
//                </div>


function print_content()
{
?>
<div id='content' class='border-module'>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
   $(function() {
      $( "#datepicker" ).datepicker();
   });
</script>

  <h1>New Show Entry</h1>
  <form name="newShow" action="addShows.php" method="post">
    <input type="radio" name='format' value='special'/>Special Format:</br>
    <input type="radio" name='format' value='regular'/>Regular Format:</br>
    <input type="radio" name='format' value='talk'/>Talk Format:</br>
    <br/>
    Show Name: <input type="text" name='name'/>
    <br/>
    Start Date: <input type='text' name='start_date' id='datepicker'/>
    <br/>
    End Date: <input type='text' name='end_date' id='datepicker'/>
    <br/>
    Show Start Time: <input type='text' name='start_time'/>
    <br/>
    Show End Time: <input type='text' name='end_time'/>
    </br>
    </br>
      <input type='checkbox' name='weekdays' value='m'/> Monday
      <input type='checkbox' name='weekdays' value='t'/> Tuesday
      <input type='checkbox' name='weekdays' value='w'/> Wednesday
      <input type='checkbox' name='weekdays' value='r'/> Thursday
      <input type='checkbox' name='weekdays' value='f'/> Friday
      <input type='checkbox' name='weekdays' value='s'/> Saturday
      <input type='checkbox' name='weekdays' value='u'/> Sunday
    </br>
    <input type='submit' value='submit'/>
</div>

<?php
   if (isset($_POST['format'])) {
      echo $_POST['format'];
      return;
   }
}
?>
