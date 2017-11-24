<?php

session_start();

$SESSION["usuario"] = "Nome Usuario";

echo "Olá Mundo!". $SESSION['usuario'];

?>
