<?php
spl_autoload_register("autoload", true, true);
function autoload($className = '') {
    include "./Singwa.php";
}
class_alias('Singwa', 'S');
//$a = new Singwa();
$a = new S();
$a->say();
$r = yaml_parse_file('../config/singwa.yaml');
var_dump($r);