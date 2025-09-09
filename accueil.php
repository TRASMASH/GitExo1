<?php
$login=$_POST["login"];
$mdp=$_POST["mdp"];


if ($login=="admin" && $mdp=="azerty") {
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("Location: http://$host$uri/profile.php");


}else
    $host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
header("Location: http://$host$uri/index.php");


?>
