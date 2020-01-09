<?php

if (isset($_POST["obtenirLlista"])){
    require_once "database.php";

$sql="SELECT * FROM llista";
$tmp=$gbd->query($sql,PDO::FETCH_ASSOC);
$result=$tmp->fetchAll();
echo json_encode($result);
}


