<?php
$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo("$ip es una IP válida");
} else {
  echo("$ip no es una IP válida");
}
?>