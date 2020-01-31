<?php
require_once "database.php";

if(isset($_POST["esborrar"])){

        $sql="DELETE FROM gestioUsuaris WHERE id=".$_POST["id"].";";
        $consulta=$gbd->prepare($sql);
         
                if ($consulta->execute()){
                        echo "producte insertat";
                }
                else{
                        echo "Error al insertar producte";
                }
                var_dump($sql);
            }