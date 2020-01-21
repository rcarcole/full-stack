<?php
require_once "database.php";


if(isset($_POST["borrar"])){
        $sql="DELETE FROM llista";
        $consulta=$gbd->prepare($sql);
        if ($consulta->execute()){
            echo "Llista eliminada correctament";
    }
    else{
            echo "Error al eliminar la llista";
    }   
}