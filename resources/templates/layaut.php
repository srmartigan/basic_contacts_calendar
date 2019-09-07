<?php
require_once('/opt/lampp/htdocs/tutoriales/phpMysql/resources/config.php');
require_once(TEMPLATES_PATH . "/header.php");
?>
<div class="container">
    <div class="row">
        <div class="col s8">
            <h3 class="center-align">ESTAMOS EN LA PAGINA HOME</h3>
        </div>
        <?php
        require_once(TEMPLATES_PATH . "/rightPanel.php");
        ?>
    </div>
</div>
<?php
require_once(TEMPLATES_PATH . "/footer.php");
?>