<?php

require_once './vendor/autoload.php';

use Peter\TzApi\TzConfig;
use Peter\TzApi\UnionApi;

$cfg = new TzConfig('', '');
$api = new UnionApi($cfg);
$mobile = '';
$code = '092110';
$uid = '2879404';
$token = '1EEB3F4F7B14D905ACC60F6A8D44F734#1633766401#1';
$token2= '28BD2FE52E12034AAFED19616E758477#1633766501#1';
//$api->setUserid($uid);
//$api->setToken($token);
var_dump($api->getschoolcode());
//var_dump($api->applydata(['from' => 'net']));
//var_dump($api->queryResume());
//var_dump($api->logout());

//var_dump($api->sendcode($mobile));

//var_dump($api->loginByMobile(['mobile' => $mobile, 'code' => $code]));


//var_dump($api->isUserExist('18557515452'));

//var_dump($api->getnetmarketjobs(['jobid' => 10130, 'marketid' => 7, 'page' => 1, 'size' => 20]));
//var_dump($api->getJobInfo(10130));
