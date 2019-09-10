<?php
require ('../library/DataBase.php');

if (isset($_GET['contact']))
{
    $contact = $_GET['contact'];
}

delContact($contact);

header('Location:../../public/listContact.php');