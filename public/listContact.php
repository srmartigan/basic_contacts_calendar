<?php
require ('../resources/config.php');
require (TEMPLATES_PATH . "/header.php");
require (LIBRARY_PATH . "/DataBase.php");
$contacts = getContacts();
?>
<div class="container">
    <div class="row " style="margin-top:20px">
        <h5 class="center-align">Listar contactos</h5>
        <div class="col s12 m10 offset-m1 l8 offset-l2 z-depth-1 grey lighten-3">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th class="right">Opciones</th>
                    </tr>
                </thead>
                <? foreach ($contacts as $contact) : ?>
                <tbody>
                    <tr>
                        <td><? echo $contact['name']; ?></td>
                        <td><? echo $contact['telephone']; ?></td>
                        <td class="right">
                            <a href="#"><i class="material-icons" style="color:green">visibility</i></a>
                            <a href="#"><i class="material-icons" style="color:blue">edit</i></a>
                            <a href= "../resources/library/deleteData.php ? <?php $contact['id'];?>">
                                <i class="material-icons" style="color:red">delete_forever</i>
                            </a>
                        </td>
                    </tr>
                <? endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
require_once(TEMPLATES_PATH . "/footer.php");
?>