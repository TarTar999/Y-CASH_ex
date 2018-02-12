<?php 
include("manifest/pash.php");
?>
<!DOCTYPE html>
<html ng-app="Y-CASH">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo $pash['bootstrap_css']?>">
	<title>Y-CASH</title>
	<script type="text/javascript" src="<?php echo $pash['jquery_js']?>"></script>
	<script type="text/javascript" src="<?php echo $pash['bootstrap_js']?>"></script>
	<script type="text/javascript" src="<?php echo $pash['angular']?>"></script>
	<script type="text/javascript" src="<?php echo $pash['app']?>"></script>
	<script type="text/javascript" src="<?php echo $pash['contextMenu']?>"></script>

</head>
<body ng-controller="HomeCtrl">

	<!-- nav barre  -->
	<?php include("fragment/navbarre.php") ?>
	<!-- end nav barre  -->

<center><h1>HOME</h1></center>

</body>
</html>