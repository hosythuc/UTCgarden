<?php
	class DB {
		private static $host = "localhost:3306";
		private static $db = "UTCgarden";
		private static $username = "root";
		private static $password = "root";

		public static function open(){
			$conn = new mysqli(
				self::$server,
				self::$user,
				self::$password,
				self::$db);
			$conn->set_charset("utf8");
			return $conn;
		}

		public static function query($conn, $sql){
			if(!($result = $conn->query($sql))){
				die("cannot execute query $sql");
			}
			return $result;
		}

		public static function single($conn, $sql){
			$result = db::query($conn, $sql);
			if($conn->affected_rows == 0){
				die("Record not found");
			}
			$row = $result->fetch_assoc();

			return $row;
		}

		public static function postParam($conn, $key){
			return $conn->escape_string($_POST[$key]);
		}

		public static function getParam($conn, $key){
			return $conn->escape_string($_GET[$key]);
		}
	}