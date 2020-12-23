<?php
require_once "db.php";

$user = $_POST;
$user['pass'] = md5($user['pass']);

$que = "INSERT INTO users (user_name, email, password)";
$que .= " VALUES ('" . $user['name'] . "', '" . $user['email'] . "', '" . $user['pass'] . "');";

$res = mysqli_query($con, $que);

mysqli_close($con);

//return $data = ['name' => '', 'email' => '', 'pass' => ''];