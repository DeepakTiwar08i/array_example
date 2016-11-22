<?php 
class Main
{
	public static $my_value = 123;
	public static function show()
	{
		echo "parrent function is called.<br>";
		echo "self value is fetched ".self::$my_value;
	}

}
class Child extends Main
{
	public static function show()
	{
		echo "child function is called<br>";
		parent::show();
	}
}

Child::show();
