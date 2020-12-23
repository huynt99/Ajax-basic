<?php
$con = mysqli_connect("localhost", "mimi", "root", "test");

if (!$con) {
	echo "Connect failed";
}