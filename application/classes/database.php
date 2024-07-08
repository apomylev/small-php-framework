<?php

class DataBase {
	
	private $link;
	public $result;
	public $go;

	private static function connect() {
		$link = new mysqli('localhost', 'user', 'password', 'database');
		if ($link->connect_error) die('Ошибка подключения к базе данных ('. $link->connect_errno .') '. $link->connect_error);
		$link->set_charset("utf8");
		return $link; 
		mysqli_close($link);
	}
	
	public static function quer($qu) {
		$link = database::connect();
		$result = $link->query($qu);
		if (empty($result)) echo "Произошла ошибка: ".mysqli_error($link);
		return $result;
	}	
	
	public static function String($go) {
		$link = database::connect();
		if (preg_match("/(\r|\n)/i", $go)) {die("Неверно заполнены поля формы!");}
		if (isset($go)) {
			$go = $link->real_escape_string($go);
			$go = htmlentities($go, ENT_QUOTES, "utf-8");
			return $go;
		}
	}
	
	public static function Int($go) {
		if (isset($go))  {
			$go = intval($go);
			return $go;
		}
	}
}

?>