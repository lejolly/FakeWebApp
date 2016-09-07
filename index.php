<!DOCTYPE html>
<html>
<head>
	<title>Random Actors</title>
	<link rel="stylesheet" href="picnic.min.css">
</head>
<body>
<div class="flex">
<div class="off-fourth-400"><span></span></div>
<div class="full third-800"><span><h1 style="text-align:center;">Random Actors</h1>
<?php
require_once 'medoo.php';
require_once 'db.php';

$datas = $database->query("
	SELECT actor_id, first_name, last_name
	FROM `actor`
	ORDER BY RAND()
	LIMIT 5;
");

foreach($datas as $data)
{
	echo "<article class=\"card\"><header><h3>";
	echo $data["actor_id"];
	echo "</h3></header><footer>";
	echo $data["first_name"] . " " . $data["last_name"];
	echo "</footer></article>";
}

?>
</span></div>
<div class="off-fourth-400"><span></span></div>
</div>
</body>
</html>
