<?php
require_once ('../library/DataBase.php');

$contacto = $_POST['contacto'];

addContact($contacto);

header('Location:../../public/createContact.php');
