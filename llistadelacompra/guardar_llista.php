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

if(isset($_POST["productes"])){
        $sql="SELECT * FROM llista";
        $tmp=$gbd->query($sql,PDO::FETCH_ASSOC);
        $result=$tmp->fetchAll();
        foreach($_POST["productes"] as $producte){
                $existeix=false;
                foreach($result as $prod){
                        if($producte['producte']==$prod['productes']){
                                $existeix=true;
                        }

                    }
if($existeix){
        $sql="UPDATE llista SET estat='".$producte["estat"]."' WHERE productes='".$producte["producte"]."';";
        $consulta=$gbd->prepare($sql);
}
else{
        $sql="INSERT INTO llista (productes, estat) VALUES ('".$producte["producte"]."','".$producte["estat"]."');";
        $consulta=$gbd->prepare($sql);
}


                
                if ($consulta->execute()){
                        echo "producte insertat";
                }
                else{
                        echo "Error al insertar producte";
                }
                var_dump($sql);

        }
}