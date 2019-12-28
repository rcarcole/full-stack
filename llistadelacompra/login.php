
<?php
if(isset($_POST["correu"]) && isset($_POST["contrasenya"])){
    if(!empty($_POST["correu"]) && !empty($_POST["contrasenya"])){
        $correu=$_POST["correu"];
        $contrasenya=$_POST["contrasenya"];
    //var_dump($correu, $contrasenya);
    require_once "database.php";
    $sql="SELECT * FROM usuaris WHERE correu='$correu' AND contrasenya='$contrasenya'";
    $tmp=$gbd->query($sql,PDO::FETCH_ASSOC);
    $result=$tmp->fetchAll();
    if(count($result)>0){
        session_start();
        $_SESSION["login"]=true;
        header('Location: index.php');
    }
    else{
        echo "L'usuari no existeix.";
    }

}
    else{
        echo "No s'han enviat dades.";
    }
}

