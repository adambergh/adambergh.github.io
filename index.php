<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?asd123">
	<title>Bas - Fomantic UI</title>
</head>
<body>


<?php
	include("menu.php");
?>

<?php
	if(!include("page/".$_GET["page"].".php")){
		header("Location: ?page=home");
	}
?>	

	<script src="js/jquery.min.js"></script>
	<script src="js/semantic.min.js"></script>
	<script src="js/linkscroll.js"></script>
	<script>$('.ui.accordion').accordion();</script>
</body>
</html>