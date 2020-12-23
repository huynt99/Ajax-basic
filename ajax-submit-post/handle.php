<?php
require_once "../db.php";

$aData = $_POST;


$que = "INSERT INTO posts VALUES(null, '" . $aData['title'] . "', '" . $aData['description'] . "');";
$res = $con->query($que);

echo "<pre>";
var_dump($res);
echo "</pre>";

