<?php

require_once './vendor/autoload.php';

use Peter\TzApi\TzConfig;
use Peter\TzApi\UnionApi;

$cfg = new TzConfig('xixunyun', '342DFDWROOIGGMM3234232DFDKLDFD234D');
$api = new UnionApi($cfg);

var_dump($api->logout());

