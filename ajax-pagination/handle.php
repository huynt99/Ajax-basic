<?php
$con = mysqli_connect("localhost", "mimi", "root", "test");

if (!$con) {
	echo "Connect failed";
}

$from = $_GET['from'];
$to = $_GET['to'];
$to = $to - $from;

$que = "SELECT id, user_name, email FROM users ORDER BY id LIMIT " . $from . ", " . $to . ";";
$res = $con->query($que);

$aRow = $res->fetch_all(MYSQLI_NUM);

foreach ($aRow as $item) {
	echo "<tr>";
	foreach ($item as $value) {
		echo "<td>" . $value . "</td>";
	}
	echo "</tr>";
}