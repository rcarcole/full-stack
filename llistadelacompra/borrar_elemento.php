<?php
require_once "database.php";

/*if(isset)
$sql="INSERT INTO llista ()  '$pc' WHERE id='$id'";
        //Netejem la consulta per evitar sql injection.
        $consulta=$gbd->prepare($sql);
        //Comprovem que la consulta s'hagi executat correctament.
        if ($consulta->execute()){

*/

/* Variables:

productes=nom del element de la llista de la BBDD -> 
$producte=llista d'elements del formulari
$prod=cadascún dels productes de la BBDD

*/

if(isset($_POST["nom"])){

        var_dump($_POST["nom"]);
        $sql="DELETE FROM llista WHERE nom='".$_POST["nom"]."';";
        $consulta=$gbd->prepare($sql);
        if ($consulta->execute()){
            echo "Producte eliminat correctament";
    }
    else{
            echo "Error al eliminar el producte";
    }
}