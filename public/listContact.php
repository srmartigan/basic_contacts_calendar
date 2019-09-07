<?php
require_once('/opt/lampp/htdocs/tutoriales/phpMysql/resources/config.php');
require_once(TEMPLATES_PATH . "/header.php");
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

                <tbody>
                    <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td class="right">
                            <a href="#"><i class="material-icons" style="color:green">visibility</i></a>
                            <a href="#"><i class="material-icons" style="color:blue">edit</i></a>
                            <a href="#"><i class="material-icons" style="color:red">delete_forever</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td class="right">
                        <a href="#"><i class="material-icons" style="color:green">visibility</i></a>
                            <a href="#"><i class="material-icons" style="color:blue">edit</i></a>
                            <a href="#"><i class="material-icons" style="color:red">delete_forever</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td class="right">
                        <a href="#"><i class="material-icons" style="color:green">visibility</i></a>
                            <a href="#"><i class="material-icons" style="color:blue">edit</i></a>
                            <a href="#"><i class="material-icons" style="color:red">delete_forever</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
require_once(TEMPLATES_PATH . "/footer.php");
?>