<?php


namespace AjaxComponent\Controllers;


class HomeController
{
	public function loadIndex()
	{
		return loadView("home/index.php");
	}
}