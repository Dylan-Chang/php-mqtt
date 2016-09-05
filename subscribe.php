<?php
namespace app\components\mqtt;
//require("./phpMQTT.php");

	
$mqtt = new phpMQTT("localhost", 1883, "musikar");

if(!$mqtt->connect()){
	exit(1);
}

$topics['hello'] = array("qos"=>0, "function"=>"procmsg");
$mqtt->subscribe($topics,0);

while($mqtt->proc()){
		
}


$mqtt->close();

function procmsg($topic,$msg){
		echo "Msg Recieved: ".date("r")."\nTopic:{$topic}\n$msg\n";
}

?>
