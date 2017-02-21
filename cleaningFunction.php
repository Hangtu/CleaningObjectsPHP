<?php
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
