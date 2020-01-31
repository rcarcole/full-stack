<?php


if (isset($_POST["gestioUsuaris"])){
    require_once "database.php";

$sql="SELECT * FROM gestioUsuaris";
$tmp=$gbd->query($sql,PDO::FETCH_ASSOC);
$result=$tmp->fetchAll();
echo json_encode($result);
}
