<?php

require_once './vendor/autoload.php';

use PeterAsasi\TzApi\TzConfig;
use PeterAsasi\TzApi\UnionApi;

$cfg = new TzConfig('', '');
$api = new UnionApi($cfg);
$mobile = '';
$code = '092110';
$uid = '2880621';
$token = '361BB0B0468C63B95E337A15C3EE3076#1634026151#1';
//$token2= '28BD2FE52E12034AAFED19616E758477#1633766501#1';
$api->setUserid($uid);
$api->setToken($token);
//'from' => 'net',
        //        from	来源，值为net(网络),market(现场招聘会)
        //resumeid	简历编号
        //jobid	岗位编号
        //marketid	招聘会编号
        //content	应聘岗位留言，可为空
var_dump($api->applydata([
    'from' => 'netmarket',
//    'marketid' => 7,
//    'type' => 1,
    'page' => 1,
    'size' => 20,
]));
//var_dump($api->applyjob([
//    'from' => 'netmarket',
//    'resumeid' => 1180874,
//    'jobid' => 9433,
//    'marketid' => 7,
//    'content' => '',
//]));
//var_dump($api->userinfo($uid, $token));
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
