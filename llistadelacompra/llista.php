<?php

//la següent linea comprova que si la sessió ja està inicialitzada no fa el session_start() i si no està inicialitzada la inicialitza.
if (session_status() == PHP_SESSION_NONE) {
session_start();
}

    if(isset($_SESSION["login"])){
        
require_once "database.php";

$sql="SELECT * FROM llista";
$tmp=$gbd->query($sql,PDO::FETCH_ASSOC);
$result=$tmp->fetchAll();

?>



<div class="main">
        <h1><strong>Llista de la Compra</strong></h1>

        <form class="" action="index.html" method="post">
            <input type="text" placeholder="Producte" name="task" />
            <button type="submit"><strong>Afegir</strong></button>
        </form>
        <div class="tasksBoard">
            <ul>
                <?php
                $li="";
                foreach($result as $producte){
                    $li.='<li><input type="checkbox"><label '; //$li=$li.'<li><input type="checkbox"><label ';
                    if($producte["estat"]=='1'){
                        $li.='class="completed"';
                    }
                    $li.='>'.$producte['nom'].'</label><span class="delete">×</span></li>';
                    echo $li;
                    $li="";
                }
                ?>
            </ul>
            <a id="clear"><strong>Esborra</strong></a>
            <button id="guardar">Guardar</button>
        </div>
    </div>


    <?php
    
}
else{
    
    require_once "log-in.php";
}

    ?>



