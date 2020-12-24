<?php
return [
	"GET"  => [
		"home"     => "HomeController@loadIndex",
		"register" => "RegisterController@loadIndex",
		"login"    => "LoginController@loadIndex",
	],
	"POST" => [
		"register" => "RegisterController@handleRegister",
		"login"    => "LoginController@handleLogin"
	]
];
