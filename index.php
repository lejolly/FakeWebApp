<!DOCTYPE html>
<html>
<head>
	<title>Random Movies</title>
	<link rel="stylesheet" href="picnic.min.css">
</head>
<body>
<div class="flex">
<div class="off-fourth-400"><span></span></div>
<div class="full third-800"><span><h1 style="text-align:center;">Random Movies</h1>
<?php
require_once 'medoo.php';
require_once 'db.php';

$datas = $database->query("
	SELECT title, description
	FROM `sakila`.`film`
	ORDER BY RAND()
	LIMIT 5;
");

foreach($datas as $data)
{
	echo "<article class=\"card\"><header><h3>";
	echo $data["title"];
	echo "</h3></header><footer>";
	echo $data["description"];
	echo "</footer></article>";
}

?>
</span></div>
<div class="off-fourth-400"><span></span></div>
</div>
</body>
</html>
