<?php
spl_autoload_register("autoload", true, true);
function autoload($className = '') {
    include "./spl.php";
}
$a = new Singwa();
$a->say();