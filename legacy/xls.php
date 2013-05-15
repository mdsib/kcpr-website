<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once 'excel_reader2.php';
$data = new Spreadsheet_Excel_Reader("2012.xls");
?>
<html>
<head>
<style>
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:12px;
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
	width:100px;
}
table.excel tbody th {
	text-align:center;
	border-color:000000;
	width:100px;
}
table.excel tbody td {
	vertical-align:bottom;
	border-color:000000;
	width:100px;
}
table.excel tbody td {
    padding: 0 3px;
	border: 1px solid #EEEEEE;
	border-color:000000;
	width:50px;
}
</style>
</head>

<body>
<?php echo $data->dump($row_numbers=false,$col_letters=false,$sheet=0,$table_class='excel'); ?>
</body>
</html>
