<html>
<title>KCPR 91.3 SLO - Schedule</title>
<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once 'excel_reader2.php';
$data = new Spreadsheet_Excel_Reader("xlsSchedules/2013_winter.xls");
?>
<body>
<?php include ('includes/header2.php'); //this gets the header in. use this line at the beginning of every page! it's easy and consistant when we want to edit it late in some other life when we get sick of the logo or need a new image or something.. ya dig?
?>
<style>
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:10px;
	border-color:000000;
	width:400px;
}
table.excel thead th, table.excel tbody th {
	background:#CCCCCC;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align:bottom;
	border-color:000000;
	width:70px;
}
table.excel tbody th {
	text-align:center;
	border-color:000000;
	width:70px;
}
table.excel tbody td {
	vertical-align:bottom;
	border-color:000000;
	width:70px;
}
table.excel tbody td {
    padding: 0 3px;
	border: 1px solid #EEEEEE;
	border-color:000000;
	width:40px;
}
#colcenter {
	width: 765px;
		}
#parent {
	width: 900px;
	}
</style>
<div id="parent">
<div id="colleft">
		<?php include ('includes/colleft.php'); ?>
</div>
<div id="colcenter">
<div class="item"><h2>Winter 2013 Schedule</h2><br>
<?php echo $data->dump($row_numbers=false,$col_letters=false,$sheet=0,$table_class='excel'); ?>
<?php include ('includes/footer.php'); ?></div>
</div>
</div>
</div>
</body>
