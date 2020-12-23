<?php
$con = mysqli_connect("127.0.0.1", "mimi", 'root', 'test');

if (!$con) {
	echo "Connector die!";
	die();
}
$user = $_POST;
$user['pass'] = md5($user['pass']);

$que = "INSERT INTO users (user_name, email, password)";
$que .= " VALUES ('" . $user['name'] . "', '" . $user['email'] . "', '" . $user['pass'] . "');";

$res = mysqli_query($con, $que);

mysqli_close($con);

//return $data = ['name' => '', 'email' => '', 'pass' => ''];