<?php
require_once "database.php";

if(isset($_POST["first"])){

        $sql="INSERT INTO gestioUsuaris (first, last, handle) VALUES ('".$_POST["first"]."','".$_POST["last"]."','".$_POST["handle"]."');";
        $consulta=$gbd->prepare($sql);
         
                if ($consulta->execute()){
                        echo "producte insertat";
                }
                else{
                        echo "Error al insertar producte";
                }
                var_dump($sql);
            }