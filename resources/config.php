<?php

$config = array(
    "db" => array(
        "mysql" => array(
            "dbname" => "tutorialPhpMysql1",
            "username" => "root",
            "password" => "",
            "host" => "localhost"
        )
    ),
    "urls" => array(
        "baseUrl" => "http://localhost/tutoriales/phpMysql"
    ),
    "paths" => array(
        "resources" => "/path/to/resources",
        "images" => $_SERVER["DOCUMENT_ROOT"] . "/images"
    )

);

defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library/'));
     
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates/'));