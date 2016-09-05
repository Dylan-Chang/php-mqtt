<?php

namespace app\components\mqtt;

//require("./phpMQTT.php");

$mqtt = new phpMQTT("192.168.10.10", 8183, "hacker");

if ($mqtt->connect()) {
    //$mqtt->publish("hello","Hello World! at ".date("r"),0);
    $mqtt->publish("hello", "success", 0);
    $mqtt->close();
}
?>
