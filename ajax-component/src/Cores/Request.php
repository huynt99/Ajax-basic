<?php

namespace AjaxComponent\Cores;

class Request
{
	public static function uri()
	{
		return str_replace(App::get('config/app')['homeUri'], '', $_SERVER['REQUEST_URI']);
	}

	public static function route()
	{
		return isset($_REQUEST['route']) ? $_REQUEST['route'] : 'home';
	}

	public static function method()
	{
		return $_SERVER["REQUEST_METHOD"];
	}
}