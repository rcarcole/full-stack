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
if(isset($_POST["tasques"])){
        $sql="SELECT * FROM tasques";
        $tmp=$gbd->query($sql,PDO::FETCH_ASSOC);
        $result=$tmp->fetchAll();
        foreach($_POST["tasques"] as $tasca){
                $existeix=false;
                foreach($result as $prod){
                        if($tasca['nom']==$prod['nom']){
                                $existeix=true;
                        }

                    }
if($existeix){
        $sql="UPDATE tasques SET estat='".$tasca["estat"]."' WHERE nom='".$tasca["nom"]."';";
        $consulta=$gbd->prepare($sql);
}
else{
        $sql="INSERT INTO tasques (nom, estat) VALUES ('".$tasca["nom"]."','".$tasca["estat"]."');";
        $consulta=$gbd->prepare($sql);
}


                
                if ($consulta->execute()){
                        echo "tasca insertada";
                }
                else{
                        echo "Error al insertar tasca";
                }
                var_dump($sql);

        }
}