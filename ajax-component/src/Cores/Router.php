<?php

namespace AjaxComponent\Cores;

class Router
{
	protected $aRouter;

	public function setRouter($route)
	{
		$this->aRouter = $route;
		return $this;
	}

	public function direct($method, $route)
	{
		if (isset($this->aRouter[$method][$route])) {
			list($controller, $classMethod) = explode("@", $this->aRouter[$method][$route]);

			$controller = "\AjaxComponent\Controllers\\" . $controller;
			$oInit = new $controller;
			$oInit->{$classMethod}();
		} else {
			include "./src/Views/pageNotFound/index.php";
		}
	}
}