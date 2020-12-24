<?php


namespace AjaxComponent\Controllers;


use AjaxComponent\Model\QueryModel;

class RegisterController
{
	public function loadIndex()
	{
		return loadView('register/index.php');
	}

	public function handleRegister()
	{
		$user = $_POST;
		$user['pass'] = md5($user['pass']);
		$newUser = (new \AjaxComponent\Model\QueryModel)->table('users')->insert(['user_name' => $user['name'],
		                                                                          'email'     => $user['email'],
		                                                                          'password'  => $user['pass']]);
		if ($newUser) header("location: http://toptra.com/ajax-component/?route=login&email=" . $user['email']);
	}
}