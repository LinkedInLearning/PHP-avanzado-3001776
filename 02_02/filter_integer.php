<?php
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Entero válido");
} else {
  echo("Entero no válido");
}
?>