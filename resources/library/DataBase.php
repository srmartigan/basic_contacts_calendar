<?php

require_once('/opt/lampp/htdocs/tutoriales/phpMysql/resources/config.php');

$datasMysql = [
    'host' => $config['db']['mysql']['host'],
    'dbname' => $config['db']['mysql']['dbname'],
    'user' => $config['db']['mysql']['username'],
    'password' => $config['db']['mysql']['password']
];
$conexion = conectarBaseDatos();

// $datos = [
//     'name' => 'Maria',
//     'telephone' => '555111666',
//     'email' => 'maria@gmail.com',
//     'address' => 'mi calle nº 23 Barcelona'
// ];

// addContact($datos);

/**
 * conectarBaseDatos
 *
 * @return PDO
 */
function conectarBaseDatos() : PDO
{
    $datasMysql = $GLOBALS['datasMysql'];
    try {
        $dsn = 'mysql:host=' . $datasMysql['host'] . ';dbname=' . $datasMysql['dbname'];
        $conexion = new PDO($dsn, $datasMysql['user'], $datasMysql['password']);
    } catch (PDOException $e) {
        exit("¡Error!: $e->getMessage()");
    }

    return $conexion;
}

/**
 * addContact
 *
 * @param  mixed $dataContact
 *
 * @return void
 */
function addContact(array $dataContact)
{
    $conexion = $GLOBALS['conexion'];
    if (!$conexion) {
        conectarBaseDatos();
    }
    $sql = 'INSERT INTO contactos (name,telephone,email,address) 
        VALUES ("' .
        $dataContact["name"] . '","' .
        $dataContact["telephone"] . '","' .
        $dataContact["email"] . '","' .
        $dataContact["address"] . '"
            )';

    $conexion->query(utf8_decode($sql));
}
