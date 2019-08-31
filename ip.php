<?php
$log = fopen("log.txt", "a+");
$date = date("d/m/Y H:i");
$ip=getenv("Remote_addr");
$real_ip=getenv("HTTP_X_FORWARDED_FOR");
$name = $_GET["name"];
fwrite($log, "Time: $date, IP: $ip, Real IP: $real_ip, Name: $name\n");
fclose($log);
//readfile('script.txt');
?>
