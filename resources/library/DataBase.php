<?php

require_once('/opt/lampp/htdocs/tutoriales/phpMysql/resources/config.php');

$datasMysql = [
    'host' => $config['db']['mysql']['host'],
    'dbname' => $config['db']['mysql']['dbname'],
    'user' => $config['db']['mysql']['username'],
    'password' => $config['db']['mysql']['password']
];
$conexion = conectarBaseDatos();


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
    $conexion = getConexion();
    $sql = 'INSERT INTO contactos (name,telephone,email,address) 
        VALUES ("' .
        $dataContact["name"] . '","' .
        $dataContact["telephone"] . '","' .
        $dataContact["email"] . '","' .
        $dataContact["address"] . '"
            )';

    $conexion->query(utf8_decode($sql));
}

function getContacts() :array
{
    $conexion = getConexion();
    $sql = 'SELECT * FROM contactos';
    $dataPDOStatement = $conexion->query($sql);
    $data = $dataPDOStatement->fetchAll();
   
    return $data;
}

function getConexion () : PDO
{
    $conexion = $GLOBALS['conexion'];
    if (!$conexion) {
        $conexion = conectarBaseDatos();
    }
    return $conexion;
}
