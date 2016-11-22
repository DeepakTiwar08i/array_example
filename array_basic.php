<?php 
	/**
	 * array_change_key_case example : it convert array key case
	 */
	echo "<----array_change_key_case example-----><br>";
	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
   echo "<pre>";
    	print_r($age);
    echo "</pre>";

    echo "<----array_chunk(input, size) example-----><br>";
    echo "<pre>";
    	print_r(array_chunk($age, 2));
    echo "</pre>";

    echo "<----array_column example-----><br>";
    $a = array(
	array(
	'id' => 5698,
	'first_name' => 'Peter',
	'last_name' => 'Griffin',
	),
	array(
	'id' => 4767,
	'first_name' => 'Ben',
	'last_name' => 'Smith',
	),
	array(
	'id' => 3809,
	'first_name' => 'Joe',
	'last_name' => 'Doe',
	)
	);
	echo "<pre>";
    	print_r(array_column($a,'id'));
    echo "</pre>";

    echo "Array combine example <br>";

    $fname=array("Peter","Ben","Joe");
	$age=array("35","37","43");

	$c=array_combine($fname,$age);
	echo "<pre>";
    	print_r($c);
    echo "</pre>";
	
	echo "array_dif example";
	$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
	$a2=array("e"=>"red","f"=>"black","g"=>"blue");
	$a3=array("a"=>"red","b"=>"black","h"=>"yellow");
	$result=array_diff($a1,$a2,$a3);
	echo "<pre>";
    	print_r($result);
    echo "</pre>";

    echo "ärray count example .<br>";

	$a=array("A","Cat","Dog","A","Dog");
	echo "<pre>";
    	print_r(array_count_values($a));
    echo "</pre>";
	
	echo "array_diff_assoc example <br>";

	$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
	$array2 = array("a" => "green", "b" =>"yellow", "c" => "red");
	$result = array_diff_assoc($array1, $array2);
	echo "<pre>";
    	print_r($result);
    echo "</pre>";

	echo "array_diff_key example<br>";
	$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_diff_key($array1, $array2));

?>