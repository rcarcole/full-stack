<?php
//Producció
/** The name of the database for WordPress */
//define( 'DB_NAME', 'rocarcol_wp1' );

/** MySQL database username */
//define( 'DB_USER', 'rocarcol_wp1' );

/** MySQL database password */
//define( 'DB_PASSWORD', 'FfouPeoHGOE6' );

//Local
/** The name of the database for WordPress */
define( 'DB_NAME', 'rocarcol_wp1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/* Conectar a una base de datos de MySQL invocando al controlador */
$dsn = 'mysql:dbname='.DB_NAME.';host=127.0.0.1';

try {
    $gbd = new PDO($dsn, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
