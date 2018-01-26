<?php

require_once  "vendor/autoload.php";


use \lampol\Crypt;


$crypt = new Crypt;

$res = $crypt->encrypt('123456','lampol');
echo $res;
echo '<br>';
echo $crypt->decrypt($res,'lampol');
