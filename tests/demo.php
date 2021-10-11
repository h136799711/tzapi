<?php

require_once './vendor/autoload.php';

use PeterAsasi\TzApi\TzConfig;
use PeterAsasi\TzApi\UnionApi;

$cfg = new TzConfig('', '');
$api = new UnionApi($cfg);
$mobile = '';
$code = '092110';
$uid = '2879404';
$token = '7CCD97999CE60620DD585012B6DFCE5E#1633938619#1';
$token2= '28BD2FE52E12034AAFED19616E758477#1633766501#1';
//$api->setUserid($uid);
//$api->setToken($token);
var_dump($api->userinfo($uid, $token));
//var_dump($api->visitlog());
//var_dump($api->register());
//var_dump($api->applydata(['from' => 'net']));
//var_dump($api->queryResume());
//var_dump($api->logout());

//var_dump($api->sendcode($mobile));

//var_dump($api->loginByMobile(['mobile' => $mobile, 'code' => $code]));


//var_dump($api->isUserExist(''));

//var_dump($api->getnetmarketjobs(['jobid' => 10130, 'marketid' => 7, 'page' => 1, 'size' => 20]));
//var_dump($api->getJobInfo(10130));
