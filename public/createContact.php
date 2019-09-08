<?php
require_once('/opt/lampp/htdocs/tutoriales/phpMysql/resources/config.php');
require_once(TEMPLATES_PATH . "/header.php");
?>
<div class="container">
    <div class="row " style="margin-top:20px" >
    <h5 class="center-align">Añadir contacto</h5>    
    <div class="col s12 m10 offset-m1 l8 offset-l2 z-depth-1 grey lighten-3">
            <form action="../resources/library/insertData.php" method="post">
                <div class="row">
                    <div class="input-field col s12 ">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="contacto[name]" id="icon_prefix" type="text" class="validate ">
                        <label for="icon_prefix">Nombre Completo</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                        <input name="contacto[telephone]" id="icon_telephone" type="tel" class="validate">
                        <label for="icon_telephone">Telefono</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">assignment</i>
                        <input name="contacto[address]" id="icon_assignment" type="text" class="validate">
                        <label for="icon_assignment">Dirección</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input name="contacto[email]" id="icon_email" type="email" class="validate">
                        <label for="icon_email">Correo Electronico</label>
                    </div>
                </div>
                <div class="row center-align">
                    <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Guardar
                        <i class="material-icons right">send</i>
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
<?php
require_once(TEMPLATES_PATH . "/footer.php");
?>