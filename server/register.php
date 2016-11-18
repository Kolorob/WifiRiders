<?php
    require_once("config.php");
    require_once("lib/database.php");

try{
	$db = Database::get();
	$sucess = $db->insert("customer", array("name"=>$_GET["name"], "mac"=>$_GET["mac"], "phone"=>$_GET["phone"]));
	if($sucess) echo "sucess";
	else echo "failed";
}
catch($e){
	echo "failed";
}

?>





