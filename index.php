<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>子供と一緒に行ける仙台周辺のバー10店</title>
<style type="text/css">
#container {
	width: 1000px;
	margin: 0 auto;
}
#marker {
    width: 1000px;
    height: 750px;
}
</style>

<script type="text/javascript">
<?php
require_once("ini.php");
require_once("map_r_data.php");
?>
</script>

</head>
<body>

<div id="container">
	<div id="marker"></div>
</div>
<script src="./map_r.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $API_key; ?>&callback=initMap"></script>


</body>
</html>
