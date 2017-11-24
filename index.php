<?php

session_start();

$SESSION["usuario"] = "Francisco";

echo "Olá Mundo!". $SESSION['usuario'];

?>