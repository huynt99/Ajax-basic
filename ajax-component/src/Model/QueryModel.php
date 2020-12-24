<?php

namespace AjaxComponent\Model;

use AjaxComponent\Cores\App;

class QueryModel
{
	private static $oSelf;
	private        $table;

	public function __construct()
	{
		if (empty(self::$oSelf)) {
			$configDatabase = App::get('config/app')['connectDB'];
			$makeConnect = mysqli_connect($configDatabase['host'], $configDatabase['name'], $configDatabase['password'],
				$configDatabase['dBName']);

			if (!$makeConnect) {
				die("Connect failed" . $makeConnect->error);
			}

			return self::$oSelf = $makeConnect;
		}
	}

	public function reset()
	{
		$this->table = '';
		return $this;
	}

	public function table($table)
	{
		$this->reset()->table = $table;
		return $this;
	}

	public function insert($aQuery = [])
	{
		$aKey = array_keys($aQuery);
		$aValue = array_values($aQuery);
		$columns = implode(', ', $aKey);
		$values = "'" . implode("', '", $aValue) . "'";
		$query = sprintf("INSERT INTO %s(%s) VALUES (%s)", $this->table, $columns, $values);

		$result = self::$oSelf->query($query);
		if (!$result) {
			die("Insert failed" . self::$oSelf->error);
		}
		return $result;
	}

	// query database user
	public function queryUser($email, $pass)
	{
		$query = sprintf("SELECT * FROM %s WHERE email='%s' AND password='%s'");
	}

	public function __destruct()
	{
		if (self::$oSelf) mysqli_close(self::$oSelf);
		return self::$oSelf = '';
	}
}