<?php
include_once "function.php";

use AjaxComponent\Cores\App;
use AjaxComponent\Cores\Router;
use AjaxComponent\Cores\Request;

App::bind('config/app', include "./configs/app.php");

$oRouter = new Router();

$oRouter->setRouter(include "./configs/route.php")->direct(Request::method(), Request::route());