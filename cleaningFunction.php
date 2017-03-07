<?php
#Created by Hang Tu Wong Ley Franco
function cleaningObject($obj) {
	foreach ($obj as $key => $value) {
		if(is_array($value)){
			cleaningObject($value);
		}
		else if (is_object($value)){
			cleaningObject($value);
		}else{
			$obj->$key = trim(strtoupper($value));
		}
	}
	return $obj;
}
//example
//$object = cleaningObject($object);
?>


<?php
	$value = "HelloWorld";
	$key   = preg_replace('/([^A-Z-])([A-Z])/', '$1_$2', $key);
	##hello_world
?>