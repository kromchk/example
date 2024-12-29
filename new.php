<?php
class Singlenton {
	private static $instance = null;
	private function __construct () {
		echo "Instance of class created";
	}
	public static function getInstance() {
		if (self::$instance === null) {
			self::$instance = new static();
		}
		return self::$instance;
	}
	private function clone() {}
	private function wakeup() {}
	public function doSomething() {
		echo "Class exist";
	}		
}


$single = Singlenton::getInstance();
echo "Value of class instance " . serialize($single);
