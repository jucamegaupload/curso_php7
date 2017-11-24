<?php

session_start();

$SESSION["usuario"] = "Nome Usuario";

echo "Olá Mundo 123!". $SESSION['usuario'];

?>
